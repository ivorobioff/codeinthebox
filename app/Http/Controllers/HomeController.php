<?php
namespace ImmediateSolutions\CodeInTheBox\Http\Controllers;

/**
 * @author Igor Vorobiov<igor.vorobioff@gmail.com>
 */
class HomeController extends Controller
{
    public function index()
    {
        return view('landing-page');
    }

    public function thankYou()
    {
        return view('thank-you');
    }
}