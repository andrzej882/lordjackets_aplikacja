<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class ShopcartController extends Controller
{
    public function index()
    {
        return view('frontend.shopcart');
    }
}
