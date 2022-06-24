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

Route::get('/',[StudentController::class,'registration'])->name('registration');
Route::post('/',[StudentController::class,'registrationSubmitted'])->name('registration');
Route::get('/login',[StudentController::class,'login'])->name('login');
Route::post('/login',[StudentController::class,'loginSubmitted'])->name('login');
Route::get('/profile',[StudentController::class,'profile'])->name('profile')->middleware('user');
Route::get('/Dashboard',[StudentController::class,'studentList'])->name('adminprofile')->middleware('admin');
Route::get('/logout',[StudentController::class,'logout'])->name('logout');
Route::get('/edit/{id}',[StudentController::class,'edit'])->name('edit')->middleware('user');
Route::post('/edit',[StudentController::class,'editSubmitted'])->name('edit');