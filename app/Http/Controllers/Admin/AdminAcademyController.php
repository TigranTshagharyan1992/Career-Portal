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
    public function index(Request $request)
    {
        $query = $request->input('academy_name');
        $onlyActive = $request->input('only_active');
        $academiesQuery = AcademyCource::query();

        if ($query) {
            $academiesQuery->where(function($q) use ($query) {
                $q->where('Course_name', 'like', "%{$query}%");
            });
        }
        if ($onlyActive) {
            $academiesQuery->where('is_active', 1);
        }
        $academies = $academiesQuery->orderByDesc('is_active')
            ->orderBy('Deadline', 'desc')->paginate(10);

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
        return view('admin.academy_edit', compact('academy'));
    }

    public function update(AcademyRequest $request)
    {
        $data = $request->validated();
        $academy = AcademyCource::find($request->id);
        $academy->update($data);
        return redirect()->route('admin.dashboard')->with('success', 'Course updated successfully.');

    }

}
