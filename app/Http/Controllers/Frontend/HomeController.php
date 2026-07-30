<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Setting;

class HomeController extends Controller
{
    public function index()
    {
        $featuredProducts = Product::where('featured', true)
            ->where('status', true)
            ->latest()
            ->take(8)
            ->get();

        $setting = Setting::first();

        return view('frontend.home', compact('featuredProducts', 'setting'));
    }
}
