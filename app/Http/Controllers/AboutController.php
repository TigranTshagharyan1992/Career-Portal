<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function __invoke()
    {
        $about = AboutUs::first();
        return view('about', compact('about'));
    }
}
