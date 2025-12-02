<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AcademyRequest;
use App\Models\AcademyCource;
use Illuminate\Http\Request;

class AdminAcademyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $academies = AcademyCource::all();
        return view('admin.academy', compact('academies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.academy_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AcademyRequest $request)
    {
       $data = $request->validated();
       $data['time_create'] = now();

       AcademyCource::create($data);
       return redirect()->route('admin.dashboard')->with('success', 'Course created successfully.');

    }

    /**
     * Update the specified resource in storage.
     */
    public function edith(Request $request, string $id)
    {
        $academy = AcademyCource::findOrFail($id);
        return view('admin.academy_form', compact('academy'));
    }

    public function update()
    {

    }

}
