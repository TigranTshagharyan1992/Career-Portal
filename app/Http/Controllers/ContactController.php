<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index() {
        $form = [];
        return view('contact',compact('form'));
    }
}
