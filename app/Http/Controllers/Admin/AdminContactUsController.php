<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactUs;
use Illuminate\Http\Request;

class AdminContactUsController extends Controller
{
    public function __invoke()
    {
        $country = session('country');
        $contactMessages = ContactUs::orderBy('created_at', 'desc')->where('Country', $country)->paginate(10);
        return view('admin.contact_us', compact('contactMessages'));
    }
}
