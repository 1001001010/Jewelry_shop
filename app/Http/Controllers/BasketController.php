<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Basket;
use Auth;

class BasketController extends Controller
{
    public function add_basket($product_id)
    {
        $status = Basket::where('user_id', Auth::user()->id)->where('positions_id', $product_id)->first();
        if ($status) {
            Basket::where('id', $status->id)->delete();
        }
        else {
            $data = [
                'user_id' => Auth::user()->id,
                'positions_id' => $product_id,
            ];
            Basket::create($data);
        }
        return redirect()->back();
    }
}
