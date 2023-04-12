<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
    llllllllllllllllllllllllllllllllllllllllllllllllll
|
*/

Route::get('/',[HomeController::class, 'home'])->name('home');

Route::get('articles',[HomeController::class, 'articles'])->name('articles');

Route::get('create',[HomeController::class, 'create'])->name('create');

Route::post('form',[HomeController::class, 'form'])->name('form');