<?php

use App\Http\Controllers\Dashboard\DashboardControlller;
use App\Http\Controllers\Dashboard\StudentsController;
use App\Http\Controllers\Dashboard\TeachersController;
use App\Http\Controllers\Dashboard\ClasseController;
use App\Http\Controllers\Dashboard\ParentsController;
use App\Http\Controllers\Frontend\FrontEndController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[FrontEndController::class,'index']);
// showTeacher
Route::get('/teachers',[FrontEndController::class,'showTeacher'])->name('frontend.teachers.show');


Route::get('/dashbord',[DashboardControlller::class,'index'])->name('dashbord');
Route::get('/dashboard/students',[StudentsController::class,'index'])->name('dashboard.students');
Route::get('/dashboard/students/create',[StudentsController::class, 'create'])->name('dashboard.students.create');
Route::post('dashboard/students/store',[StudentsController::class, 'store'])->name('dashboard.students.store');
Route::get('/dashboard/students/{student}/edit',[StudentsController::class, 'edit'])->name('dashboard.students.edit');
Route::put('/dashboard/students/{student}/update',[StudentsController::class, 'update'])->name('dashboard.students.update');
Route::delete('/dashboard/students/{student}/delete',[StudentsController::class, 'destroy'])->name('dashboard.students.destroy');
Route::get('/dashboard/students/{student}/show',[StudentsController::class, 'show'])->name('dashboard.students.show');





// Parents Controlller
Route::get('/dashboard/parents',[ParentsController::class,'index'])->name('dashboard.parents');
Route::get('/dashboard/parents/create',[ParentsController::class,'create'])->name('dashboard.parents.create');
Route::post('/dashboard/parents/store',[ParentsController::class,'store'])->name('dashboard.parents.store');
// Route::get('/dashboard/{parent}/store',[ParentsController::class,'edit'])->name('dashboard.parents.edit');
Route::get('/dashboard/parents/{parent}/edit',[ParentsController::class,'edit'])->name('dashboard.parents.edit');
Route::get('/dashboard/parents/{parent}/show',[ParentsController::class,'show'])->name('dashboard.parents.show');
Route::put('/dashboard/parents/{parent}/update',[ParentsController::class,'update'])->name('dashboard.parents.update');
Route::delete('/dashboard/parents/{parent}/delete',[ParentsController::class,'destroy'])->name('dashboard.parents.destroy');


//Teachers  Controller
Route::get('/dashboard/teachers',[TeachersController::class,'index'])->name('dashboard.teachers');
Route::get('/dashboard/teachers/create',[TeachersController::class,'create'])->name('dashboard.teachers.create');
Route::post('/dashboard/teachers/store',[TeachersController::class,'store'])->name('dashboard.teachers.store');
Route::get('/dashboard/teachers/{teacher}/edit', [TeachersController::class, 'edit'])->name('dashboard.teachers.edit');

Route::put('/dashboard/teachers/{teacher}/update',[TeachersController::class, 'update'])->name('dashboard.teachers.update');
Route::delete('/dashboard/teachers/{teacher}/delete',[TeachersController::class, 'destroy'])->name('dashboard.teachers.destroy');
Route::get('/dashboard/teachers/{teacher}/show',[TeachersController::class, 'show'])->name('dashboard.teachers.show');


//ClasseController
Route::get('/dashboard/classes',[ClasseController::class,'index'])->name('dashboard.classes');
Route::get('/dashboard/classes/create',[ClasseController::class,'create'])->name('dashboard.classes.create');
Route::post('/dashboard/classes/store',[ClasseController::class,'store'])->name('dashboard.classes.store');
Route::get('/dashboard/classes/{class}/edit',[ClasseController::class,'edit'])->name('dashboard.Classes.edite');
Route::put('/dashboard/classes/{class}/update',[ClasseController::class ,'update'])->name('dashboard.Classes.update');
Route::delete('/dashboard/classes/{class}/delete',[ClasseController::class ,'destroy'])->name('dashboard.Classes.destroy');
Route::get('/dashboard/classes/{class}/show',[ClasseController::class,'show'])->name('dashboard.Classes.show');
