<?php

namespace App\Http\Controllers;

class HomeController
{
    public function index ()
    {
        return view('index');
    }

    public function about ()
    {
        return view('about');
    }
}