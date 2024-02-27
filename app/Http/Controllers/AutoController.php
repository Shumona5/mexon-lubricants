<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AutoController extends Controller
{
    public function auto()
    {
        return view('frontend.pages.products.auto');
    }

    public function motorbike()
    {
        return view('frontend.pages.products.motorbike');
    }
}
