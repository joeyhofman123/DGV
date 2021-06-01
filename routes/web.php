<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [\App\Http\Controllers\dashboardController::class , 'index'])->name('dashboard.index');

Route::get('/dashboard/teksten/create', [\App\Http\Controllers\TextsContorller::class, 'create'])->name('dashboard.teksten.create');
Route::post('/dashboard/teksten/store', [\App\Http\Controllers\TextsContorller::class, 'store'])->name('dashboard.teksten.store');



