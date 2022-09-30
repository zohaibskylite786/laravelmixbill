<?php

use App\Http\Controllers\DashboardController;
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

Route::middleware(['auth'])->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

});


Route::get('login', [UserController::class, 'login_form'])->name('login');
Route::post('login', [UserController::class, 'login'])->name('login.post');
Route::get('register', [UserController::class, 'register_form'])->name('register');
Route::post('register', [UserController::class, 'register'])->name('register.post');

