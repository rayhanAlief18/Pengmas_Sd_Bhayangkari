<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\AlumniController;
use App\Http\Controllers\InventarisController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard',[HomeController::class,'dashboard']);
Route::resource('/guru', GuruController::class);
Route::resource('/staff', StaffController::class);
Route::resource('/alumni', AlumniController::class);
Route::resource('/inventaris', InventarisController::class);