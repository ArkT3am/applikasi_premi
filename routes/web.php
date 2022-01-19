<?php

use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

// Route::get('home', function () {
//     return view('home');
// });

Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisterController::class, 'index'])->name('register.index');
    Route::post('/register', [RegisterController::class, 'store'])->name('register.store');
});


Route::get('projects', [ProjectController::class, 'index']);
Route::get('projects/add', [ProjectController::class, 'add']);
Route::post('projects', [ProjectController::class, 'addProcess']);
Route::get('projects/edit/{id}', [ProjectController::class, 'edit']);
Route::patch('projects/{id}', [ProjectController::class, 'editProcess']);
Route::delete('projects/{id}', [ProjectController::class, 'delete']);


Route::get('employees/trash', 'EmployeeController@trash');
Route::get('employees/restore/{id?}', 'EmployeeController@restore');
Route::get('employees/delete/{id?}', 'EmployeeController@delete');
Route::resource('employees', 'EmployeeController');

Route::resource('prod_parameters', 'Prod_parameterController');
