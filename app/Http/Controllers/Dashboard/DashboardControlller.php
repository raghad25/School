<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardControlller extends Controller
{
    public function index()
    {
        $programming_by = config('app.programming_by');
        $app_name = config('app.name');

        return view('dashboard.index',[
            'programming_by' => $programming_by,
            'app_name' => $app_name,
        ]);
    }
}
