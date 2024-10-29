<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function about()
    {
        return view('about'); // Make sure this matches the name of your view file
    }

    public function classes()
    {
        return view('classes'); // Make sure this matches the name of your view file
    }

    public function contact()
    {
        return view('contact'); // Make sure this matches the name of your view file
    }
    public function policy()
    {
        return view('policy'); // Make sure this matches the name of your view file
    }
}
