<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    // Открытие главной страницы
    {
        return view('welcome');
    }
    public function catalog()
    // Открытие каталога
    {
        return view('catalog');
    }
    public function about()
    // Открытие о нас
    {
        return view('about');    
    }
    public function delivery()
    // Открытие доставка и оплата
    {
        return view('delivery');    
    }
}
