<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Position;

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
        $potition = Position::orderBy('created_at', 'DESC')->get();
        return view('catalog', ['categories' => $category, 'positions' => $potition]);
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
    public function product($product_id)
    {
        $procut = Position::where('id', $product_id)->first();
        return view('product', ['product' => $procut]);
    }
}
