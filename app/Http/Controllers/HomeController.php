<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class HomeController extends Controller
{
    public function index()
    {
        // Открытие главной страницы
        return view('welcome');
    }
    public function catalog()
    {
        // Открытие каталога
        $category = Category::get();
        return view('catalog', ['categories' => $category]);
    }
    public function about()
    {
        // Открытие о нас
        return view('about');    
    }
    public function delivery()
    {
        // Открытие доставка и оплата
        return view('delivery');    
    }
}
