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

Route::get('article_1',[HomeController::class, 'article_1'])->name('article_1');