<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ServiceController;

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

//Route::get('/',[PagesController::class, 'index'])->name('home');
Route::get('/',[PagesController::class, 'index'])->name('home');
//Route::view('/', 'home');
Route::get('/service',[PagesController::class, 'profile'])->name('service');
Route::get('/our_team',[PagesController::class, 'our_team'])->name('our_team');
Route::get('/about_us',[PagesController::class, 'about_us'])->name('about_us');
Route::get('/contact',[PagesController::class, 'contact_us'])->name('contact_us');


//service routes
// Route::get('/serviceList',[ServiceController::class, 'serviceList'])->name('serviceList');
// Route::get('/serviceEdit/{name}/{id}',[ServiceController::class, 'serviceEdit'])->name('serviceEdit');

// Route::get('/serviceCreate',[ServiceController::class, 'serviceCreate'])->name('serviceCreate');
// Route::post('/serviceCreate',[ServiceController::class, 'serviceCreateSubmitted'])->name('serviceCreate');