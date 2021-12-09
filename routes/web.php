<?php

use App\Http\Controllers\HomeController;
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

Route::get('/home7', function () {
    return view('welcome');
    
});
Route::get('/', function () {
    return view('home.index');    

});
Route::get('/home', [HomeController::class,'index'])->name('home');
Route::get('/aboutus', [HomeController::class,'index'])->name('aboutus');

//Admin
Route::get('/admin',[\App\Http\Controllers\Admin\HomeController::class,'index'])->name('adminhome');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
