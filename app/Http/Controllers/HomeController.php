<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke()
    {
        $home = Home::first();
        return view('home', compact('home'));
    }
}
