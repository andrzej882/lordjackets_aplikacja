<?php
namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;

class ContactUsMailController extends Controller
{
   public function ContactUsForm() {
        return redirect()->back()->with('success',
            'Dziękujemy za wiadomość, postaramy się odpowiedzieć się jak najszybciej.');
   }
}
