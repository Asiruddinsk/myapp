<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Index()
    {
        return view('index');
    }

    public function About()
    {
        return view('about');
    }

    public function Product()
    {
        return view('product');
    }

    public function Contact()
    {
        return view('contact');
    }
}
