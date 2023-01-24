<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomePageController;

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

Route::get('/', [WelcomePageController::class,'index'])->name('portfolio');
Route::get('/cv' ,[WelcomePageController::class , 'cv'])->name('cv');
Route::get('/hobbies' ,[WelcomePageController::class,'hobbiesIndex' ])->name('hobbies');
Route::get('/portfolio_details/{id}', [WelcomePageController::class,'detail'])->name('portfolio_detail');
Route::get('/hobbies_details/{id}', [WelcomePageController::class,'hobbiesDetail'])->name('hobbies_detail');

