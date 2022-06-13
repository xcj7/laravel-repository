<?php

use Illuminate\Support\Facades\Route;
 use App\Http\Controllers\StudentController;
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
Route::post('/registration',[StudentController::class,'RegistrationSubmitted'])->name('reg');
Route::get('/registration',[StudentController::class,'Registration'])->name('reg');
Route::get('/contact',[StudentController::class,'contact'])->name('contact');
Route::post('/login',[StudentController::class,'loginSubmitted'])->name('login');
Route::get('/login',[StudentController::class,'login'])->name('login');
Route::get('/logout',[StudentController::class,'logout'])->name('logout');


