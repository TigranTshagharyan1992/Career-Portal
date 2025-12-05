<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AboutUsRequest;
use App\Http\Requests\Admin\HomeRequest;
use App\Models\AboutUs;
use App\Models\Home;
use Illuminate\Http\Request;

class AdminAboutUsController extends Controller
{
    public function show()
    {
        $about = AboutUs::first();
        return view('admin.about_us' , compact('about'));
    }

    public function store(AboutUsRequest $request)
    {
        $data = $request->validated();

        $about = AboutUs::first();

        if($about) {
            $about->update($data);
        } else {
            AboutUs::create($data);
        }

        return redirect()->route('admin.about')->with('success', 'About page updated successfully.');
    }
}
