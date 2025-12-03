<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminHomeController extends Controller
{
    public function show()
    {
        return view('admin.home');
    }

    public function store()
    {

    }
}

