<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Position;

class AdminController extends Controller
{

    public function index()
    {
        // Открытие админки
        $category = Category::get();
        return view('admin', ['categories' => $category]);
    }
    public function add_category(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
        ]);

        Category::create([
            'name' => $request->name,
        ]);
        return redirect(route('Admin'));
    }
    public function new_position(Request $request) 
    {
        // Добавление ноового товара
        $validated = $request->validate([
            'name' => 'required|string',
            'category' => 'required',
            'price' => 'required|integer',
            'photo' => 'required|image|mimes:jpg,png,jpeg,webp|max:2048',
            'metall' => 'required|string',
            'inserts' => 'required|string',
            'insert_weight' => 'required|numeric',
            'weight' => 'required|numeric',
        ]);
    
        // Сохранение фото
        $name = time(). "." . $request->photo->extension();
        $destination = 'public/products';
        $path = $request->photo->storeAs($destination, $name);
        $data = [
            'name' => $request->name,
            'category_id' => $request->category,
            'price' => $request->price,
            'photo' => 'storage/products/' . $name,
            'metall' => $request->metall,
            'inserts' => $request->inserts,
            'insert_weight' => $request->insert_weight,
            'weight' => $request->weight,

        ];
        Position::create($data);

        return redirect()->back();
    }
    public function delete_position($product_id)
    {
        Position::where('id', $product_id)->delete();
        return route('catalog');
    }
}
