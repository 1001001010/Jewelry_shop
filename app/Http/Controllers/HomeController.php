<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Position;
use App\Models\Basket;
use App\Models\Like;
use Auth;

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
        $positions = Position::orderBy('created_at', 'DESC')->get();
        $basket = Basket::where('user_id', Auth::user()->id)->pluck('positions_id')->all();
        return view('catalog', ['categories' => $category, 'positions' => $positions, 'basket' => $basket]);
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
        $basket = Basket::where('user_id', Auth::user()->id)->where('positions_id', $product_id)->first();
        $like = Like::where('user_id', Auth::user()->id)->where('positions_id', $product_id)->first();
        return view('product', ['product' => $procut, 'basket' => $basket, 'like' => $like]);
    }
}
