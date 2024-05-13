<?php

namespace App\Http\Controllers\Frontend;
use App\Models\Teachers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function index()
    {
        return view('frontend.MasterIndex');
    }

    public function showTeacher(){
        $informations =Teachers::all();
        return view('frontend.teachers', compact('informations'));
    }
}
