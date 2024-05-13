<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Teachers;
use Illuminate\Http\Request;

class TeachersController extends Controller
{
        public function index()
    {
        $informations =teachers::all();
        return view('dashboard.teachers.index', compact('informations'));
    }
    public function create()
    {
        return view('dashboard.teachers.create');
    }
    public function store(Request $request) {
    teachers::create(
        $request->all()
    );
    session()->flash('success', 'Teacher created successfully');
    return redirect()->route('dashboard.teachers');
   }
   public function edit(teachers $teacher){
    return view('dashboard.teachers.edit',compact('teacher'));
}

public function update(Request $request , Teachers $teacher)
    {
        $teacher->update(
            $request->all()
        );
        session()->flash('update', 'Teacher updated successfully');
        return redirect()->route('dashboard.teachers');


    }
    public function destroy(Teachers $teacher)
    {
        $teacher->delete();
        session()->flash('delete', 'Teacher deleted successfully');
        return redirect()->route('dashboard.teachers');
    }
    public function show(Teachers $teacher){
        return view('dashboard.teachers.show',compact('teacher'));

    }
}