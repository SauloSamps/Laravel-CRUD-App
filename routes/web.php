<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;

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


Route::get('/', [PagesController::class, 'index']);  //MODEL FOR PAGE CONTROLLER CALL!!!!
Route::get('/about', [PagesController::class, 'about']);
Route::get('/login', [PagesController::class, 'login']);
Route::get('/register', [PagesController::class, 'register']);

Route::resource('posts', PostsController::class);


Auth::routes();

Route::get('/home', [PagesController::class, 'index']);

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index']);
