<?php
namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;

class CheckoutController extends Controller
{
    public function index()
    {
        return view('frontend.checkout');
    }
    public function placeOrder(){
        return redirect()->back()->with('success',
            'Dziękujemy za zakupy, postaramy się zrealizować zamówienie jak najszybciej.');
    }
}
