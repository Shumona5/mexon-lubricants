<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndustrialController extends Controller
{
    public function industrial()
    {
        return view('frontend.pages.products.industrial');
    }

    public function diesel(){
        return view('frontend.pages.products.industrial-diesel');
    }

    public function grease()
    {
        return view('frontend.pages.products.grease');
    }
}
