<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Students;

use Illuminate\Http\Request;
use App\Models\Teachers;
use App\Models\Parents;
use App\Models\Classes;

class StudentsController extends Controller
{
    
    public function index()
    {
        $informations = Students::all();
        $teachers =Teachers::all();
        $parents=Parents::all();
        $class=Classes::all();
        return view('dashboard.students.index', compact('informations','teachers', 'parents', 'class'));
    }
  
    public function create()
    {
        $teachers =Teachers::all();
        $parents=Parents::all();
        $class=Classes::all();
        return view('dashboard.students.create', compact('teachers', 'parents', 'class'));
    }
    public function store(Request $request)
    {
       
        Students ::create(
            $request->all()
    
           );
           session()->flash('success', 'Students  created successfully');
           return redirect()->route('dashboard.students');

    }
    public function edit(Students $student)
    {
        return view('dashboard.students.edit',compact('student'));
    }
    public function update(Request $request , Students $student)
    {
        $student->update(
            $request->all()
        );
        session()->flash('update', 'Student updated successfully');
        return redirect()->route('dashboard.students');


    }
    public function destroy(Students $student)
    {
        $student->delete();
        session()->flash('delete', 'Student deleted successfully');
        return redirect()->route('dashboard.students');
    }
    public function show(Students $student)
    {
        return view('dashboard.students.show', compact('student'));
    }
}
