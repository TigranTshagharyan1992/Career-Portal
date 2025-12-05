<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\HomeRequest;
use App\Models\Home;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminHomeController extends Controller
{
    public function show()
    {
        $homePage = Home::first();
        return view('admin.home', compact('homePage'));
    }

    public function store(HomeRequest $request)
    {
        $data = $request->validated();

        $home = Home::first();

        foreach (['main_image', 'section1_image', 'section2_image', 'section3_image'] as $imageField) {
            if ($request->hasFile($imageField)) {
                // Delete old image if exists
                if ($home && $home->$imageField && file_exists(public_path($home->$imageField))) {
                    unlink(public_path($home->$imageField));
                }

                // Create folder if missing
                $folder = public_path('uploads/home');
                if (!file_exists($folder)) {
                    mkdir($folder, 0775, true);
                }

                // Save using move()
                $file = $request->file($imageField);
                $filename = time() . '_' . $file->getClientOriginalName();
                $file->move($folder, $filename);

                // Save path to DB
                $data[$imageField] = 'uploads/home/' . $filename;
            }
        }

        // Update or create single Home row
        if ($home) {
            $home->update($data);
        } else {
            Home::create($data);
        }

        return redirect()->route('admin.home')->with('success', 'Home page updated successfully.');
    }

}

