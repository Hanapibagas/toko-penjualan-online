<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index_home()
    {
        return view('components.pages.home');
    }

    public function categori_home()
    {
        return view('components.pages.category');
    }
}
