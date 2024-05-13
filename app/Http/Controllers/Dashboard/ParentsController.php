<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Parents;

class ParentsController extends Controller
{
    public function index(){
        $informations = Parents::all();
        return view('dashboard.Parentes.index',compact('informations'));

    }
    public function create(){
        return view('dashboard.Parentes.create');

    }
    public function store(Request $request){
        Parents::create(
        $request->all()

       );
       session()->flash('success', 'Parents created successfully');
       return redirect()->route('dashboard.parents');
    }
    
    public function edit(Parents $parent){
        return view('dashboard.Parentes.edit',compact('parent'));

    }
    public function show(Parents $parent){
        return view('dashboard.Parentes.show',compact('parent'));

    }
    public function update(Request $request ,  Parents $parent)
    {
        $parent->update(
          $request->all()
      );
      session()->flash('update', 'Parent updated successfully');
      return redirect()->route('dashboard.parents');
  }
  public function destroy(Parents $parent)
  {
      $parent->delete();
      session()->flash('delete', 'Parent deleted successfully');
      return redirect()->route('dashboard.parents');
  }

}
