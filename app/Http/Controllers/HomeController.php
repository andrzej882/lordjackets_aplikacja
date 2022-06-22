<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        return view('frontend.firstlookpage');
    }

    public function privacyPolicy()
    {
        return view('frontend.privacy');
    }
    public function faq()
    {
        return view('frontend.faq');
    }
    public function about()
    {
        return view('frontend.about-us');
    }
    public function showDashboard()
    {
        return view('frontend.user-dashboard');
    }

}
