<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Middleware\IsAdmin;

class AdminController extends Controller
{
    public static function boot()
    {
        parent::boot();
        static::middleware([IsAdmin::class]);
    }

    public function index()
    {
        // Открытие админки
        return view('admin');
    }
}
