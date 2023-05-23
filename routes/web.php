<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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

//Route::resource('/', HomePageController::class);
Route::get('/index', [PagesController::class, 'index']);
Route::get('/man', [PagesController::class, 'man']);
Route::get('/woman', [PagesController::class, 'woman']);
