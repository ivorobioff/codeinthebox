<?php
namespace ImmediateSolutions\CodeInTheBox\Http\Controllers;

class WebApplicationProductController extends Controller
{
    public function show()
    {
        return view('products.web-application', [
            '_token' => csrf_token()
        ]);
    }

    public function estimate()
    {
        return redirect()->route('products.web-application.price');
    }

    public function price()
    {
        return view('products.price', [
            '_token' => csrf_token()
        ]);
    }


    public function order()
    {
        return redirect()->route('thank-you');
    }
}
