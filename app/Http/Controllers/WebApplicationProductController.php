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
        return view('products.price');
    }
}
