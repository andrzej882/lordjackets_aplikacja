<?php
namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;

class ProductsDetailsController extends Controller
{
    public function index()
    {
        return view('frontend.productdetails');
    }
}
