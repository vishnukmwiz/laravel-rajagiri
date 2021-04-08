<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\BusController;
use App\Http\Controllers\BookController;

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

Route::get('/', function () {
    return view('theme');
});

Route::get('/create', [FacultyController::class,'create'] );
Route::get('/student', [StudentController::class,'create'] );
Route::get('/bus', [BusController::class,'create'] );
Route::get('/book', [BookController::class,'create'] );
Route::post('/facultyread', [FacultyController::class,'store'] );
Route::post('/studentadd', [StudentController::class,'store'] );
Route::post('/busadd', [BusController::class,'store'] );
Route::post('/bookadd', [BookController::class,'store'] );