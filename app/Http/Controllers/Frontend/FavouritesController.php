<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;

class FavouritesController extends Controller
{
    public function index()
    {
        return view('frontend.favourites');
    }
}
