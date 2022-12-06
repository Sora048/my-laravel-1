<?php

use App\Http\Controllers\StudentsController;
use App\Http\Controllers\UserController;
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

// Route::get();
// Route::post();
// Route::put();
// Route::patch();
// Route::delete();
// Route::options();

//Common route naming
///index - Show all data or student
//show - Show single data or student
//create - Show a form to a new user
//store - Store a data
//edit - Show form ti a data
//update - Update a data
//destroy - delete a data

//new for laravel 9 - group all controllers
Route::controller(UserController::class)->group(function(){
    Route::get('/register', 'register');
    Route::get('/login', 'login')->name('login')->middleware('guest');
    Route::post('/login/process', 'process');
    Route::post('/logout', 'logout');
    Route::post('/store', 'store');
});



//new for laravel 9
Route::controller(StudentsController::class)->group(function(){
    Route::get('/', 'index')->middleware('auth');
    Route::get('/add/student', 'create');
    Route::post('/add/student', 'store');
    Route::get('/student/{students}', 'show');
    Route::put('/student/{students}', 'update');
    Route::delete('/student/{students}', 'destroy');
});






