<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AcademyController extends Controller
{
    public function __invoke()
    {
        return view('academy');
    }
}
