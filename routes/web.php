<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;

// Route::post();
// Route::put();
// Route::patch();
// Route::delete();
// Route::options();

// Route::get('/', function(){
//     return view('welcome');
// });

// Route::get('/users', [userController::class, 'index']);

// Route::get('/user{id}', [userController::class, 'user']);

Route::get('/',[StudentController::class, 'student']);