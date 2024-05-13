<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Classes;
use Illuminate\Http\Request;


class ClasseController extends Controller
{
    public function index()
    {
        $informations = Classes::all();
        return view('dashboard.Classes.index',compact('informations'));
    }
    
    public function create()
    {
        return view('dashboard.Classes.create');
    }
    public function store(Request $request){
        classes::create(
            $request->all()
    
           );
           session()->flash('success', 'Class created successfully');
           return redirect()->route('dashboard.classes');
        }
        public function edit(Classes $class){
            return view('dashboard.Classes.edite',compact('class'));
    
        }
        public function update(Request $request ,  Classes $class)
      {
        $class->update(
            $request->all()
        );
        session()->flash('update', 'Class updated successfully');
        return redirect()->route('dashboard.classes');
    }
    public function destroy(Classes $class)
    {
        $class->delete();
        session()->flash('delete', 'Class deleted successfully');
        return redirect()->route('dashboard.classes');
    }
 
    public function show(Classes $class){
        return view('dashboard.Classes.show',compact('class'));

    }
    
}
