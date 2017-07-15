<?php
namespace ImmediateSolutions\CodeInTheBox\Http\Controllers;

use ImmediateSolutions\CodeInTheBox\Customer;
use ImmediateSolutions\CodeInTheBox\Order;

class WebApplicationProductController extends Controller
{
    public function show()
    {
        return view('products.web-application', [
            '_token' => csrf_token(),
            'price' => session('price', (function(){
                return $this->calculate([
                    'goal' => 'mvp',
                    'specification' => true,
                    'design' => 'any',
                    'modules' => ['User', 'Post', 'Comment', 'Category', 'Subscription'],
                    'integrations' => [],
                    'algorithm' => 'no'
                ]);
            })()),
            'answers' => session('answers', []),
        ]);
    }

    public function estimate()
    {
        $request = request();

        session()->put('answers', $request->all());

        $data = [
            'goal' => $request->input('goal'),
            'specification' => $request->input('specification') == 1,
            'design' => $request->input('design'),
            'modules' => array_filter(array_map('trim', explode("\n", $request->input('modules', ''))), function($module){
                return $module != '';
            }),
            'integrations' => array_filter(array_map('trim', explode("\n", $request->input('integrations', ''))), function($module){
                return $module != '';
            }),
            'algorithm' => $request->input('algorithm')
        ];

        $price = $this->calculate($data);

        session()->put('price', $price);

        if ($orderId = session('order')){
            $order = Order::find($orderId);
        } else {
            $order = new Order();
        }

        $order->price = $price;
        $order->status = 'estimated';
        $order->goal = $data['goal'];
        $order->specification = $data['specification'];
        $order->modules = json_encode($data['modules']);
        $order->design = $data['design'];
        $order->integrations = json_encode($data['integrations']);
        $order->algorithm = $data['algorithm'];
        $order->created_at = (new \DateTime())->format('Y-m-d H:i:s');

        $order->save();

        session(['order' => $order->id]);

        return redirect()->route('products.web-application.price');
    }

    public function price()
    {
        if (!session('price')){
            return redirect()->route('products.web-application');
        }

        return view('products.price', [
            '_token' => csrf_token(),
            'price' => session('price')
        ]);
    }

    public function order()
    {
        $email = trim(request()->input('email'));

        $customer = Customer::where(['email' => $email])->first();

        if (!$customer){
            $customer = new Customer();
            $customer->created_at = (new \DateTime())->format('Y-m-d H:i:s');
            $customer->email = $email;
            $customer->save();
        }

        $order = Order::find(session('order'));

        $order->status = 'requested';
        $order->customer_id = $customer->id;
        $order->save();

        session()->forget(['order', 'answers', 'price']);

        return redirect()->route('thank-you');
    }

    /**
     * @param array $data
     * @return float
     */
    private function calculate(array $data)
    {
        $config = [
            'cost_per_hour' => 35,
            'module' => [
                'duration_per_module' => [
                    'prototype' => 6,
                    'mvp' => 10,
                    'full' => 14
                ],
            ],
            'specification' => [
                'duration_per_module' => 1.6
            ],
            'integration' => [
                'duration_per_integration' => 16
            ],
            'design' => [
                'html_cost_per_hour' => 20,
                'design_cost_per_hour' => 40,
                'html_duration_per_module' => [
                    'prototype' => 0.6,
                    'mvp' => 2,
                    'full' => 4
                ],
                'design_duration_per_module' => [
                    'prototype' => 0,
                    'mvp' => 2,
                    'full' => 4
                ]
            ],
            'algorithm' => [
                'duration' => [
                    'no' => 0,
                    'provided' => 8,
                    'wanted' => 20
                ]
            ]
        ];

        $totalModules = count($data['modules']);

        $modulesDuration = $totalModules * $config['module']['duration_per_module'][$data['goal']];
        $modulesCost = $modulesDuration * $config['cost_per_hour'];

        if (!$data['specification']){
            $specificationDuration = $totalModules * $config['specification']['duration_per_module'];
        } else {
            $specificationDuration = 0;
        }

        $specificationCost = $specificationDuration * $config['cost_per_hour'];

        if ($data['design'] == 'provided'){
            $htmlDuration = $totalModules * $config['design']['html_duration_per_module'][$data['goal']];
            $designDuration = 0;
        } elseif ($data['design'] == 'wanted'){
            $htmlDuration = $totalModules * $config['design']['html_duration_per_module'][$data['goal']];
            $designDuration = $totalModules * $config['design']['design_duration_per_module'][$data['goal']];
        } else {
            $htmlDuration = 0;
            $designDuration = 0;
        }

        $htmlCost = $htmlDuration * $config['design']['html_cost_per_hour'];
        $designCost = $designDuration * $config['design']['design_cost_per_hour'];

        $integrationDuration = count($data['integrations']) * $config['integration']['duration_per_integration'];
        $integrationCost = $integrationDuration * $config['cost_per_hour'];

        $algorithmDuration =  $config['algorithm']['duration'][$data['algorithm']];
        $algorithmCost = $config['cost_per_hour'] * $algorithmDuration;

        return $modulesCost + $specificationCost + $htmlCost + $designCost + $integrationCost + $algorithmCost;
    }
}
