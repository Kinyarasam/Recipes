<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\Sign_UpController;

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

Route::get('/Sign_Up', [Sign_UpController::class, 'index'])->name('Sign_Up');
Route::post('/Sign_Up', [Sign_UpController::class, 'store']);

Route::get('/Recipes', function () {
    return view('Recipe.index');
});


Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/Login', [LoginController::class, 'index'])->name('Login');
Route::post('/Login', [LoginController::class, 'index']);


