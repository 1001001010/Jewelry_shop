<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function catalog()
    {
        return view('catalog');
    }
    public function about()
    {
        return view('about');    
    }
    public function delivery()
    {
        return view('delivery');    
    }
}
