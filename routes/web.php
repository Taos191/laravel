<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\InboxController;


Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->middleware('auth','isAdmin');

Route::get('/department', [App\Http\Controllers\DepartmentController::class, 'index'])->middleware('auth','isAdmin');
Route::get('/add-department', [App\Http\Controllers\DepartmentController::class, 'create'])->middleware('auth','isAdmin');
Route::post('/add-department', [App\Http\Controllers\DepartmentController::class, 'store'])->middleware('auth','isAdmin');
Route::get('/add-employee', [App\Http\Controllers\DepartmentController::class, 'create_employee'])->middleware('auth','isAdmin');
Route::post('/add-employee', [App\Http\Controllers\DepartmentController::class, 'store_employee'])->middleware('auth','isAdmin');
Route::get('/department-employee/{department_id}', [App\Http\Controllers\DepartmentController::class, 'department_employee'])->middleware('auth','isAdmin');
Route::get('/department-delete/{department_id}', [App\Http\Controllers\DepartmentController::class, 'department_delete'])->middleware('auth','isAdmin');
Route::get('/update-employee/{employee_id}', [App\Http\Controllers\DepartmentController::class, 'select_data_employee'])->middleware('auth','isAdmin');

Route::put('/updates-employee/{employee_id}', [App\Http\Controllers\DepartmentController::class, 'update_profile'])->middleware('auth','isAdmin');
Route::get('/delete-employee/{employee_id}', [App\Http\Controllers\DepartmentController::class, 'delete'])->middleware('auth','isAdmin');


Route::get('/profile', [App\Http\Controllers\UserController::class, 'profile'])->middleware('auth');
Route::put('/profile-edit/{user_id}', [App\Http\Controllers\UserController::class, 'profile_edit'])->middleware('auth');


Route::get('/inbox', [App\Http\Controllers\InboxController::class, 'inbox'])->middleware('auth');
