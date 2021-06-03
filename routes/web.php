<?php
namespace App\Http\Controllers;

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
Route::get('/dashboard/teksten/recent', [\App\Http\Controllers\TextsContorller::class, 'recent'])->name('dashboard.teksten.recent');
Route::get('/dashboard/teksten/langste', [\App\Http\Controllers\TextsContorller::class, 'longest'])->name('dashboard.teksten.langste');
Route::get('/dashboard/teksten/kortste', [\App\Http\Controllers\TextsContorller::class, 'shortest'])->name('dashboard.teksten.kortste');
Route::get('/dashboard/teksten/', [\App\Http\Controllers\TextsContorller::class, 'index'])->name('dashboard.teksten.alle');
Route::get('/dashboard/woorden/{id}', [\App\Http\Controllers\WordsContorller::class, 'show'])->name('dashboard.woorden.show');
Route::get('/dashboard/tekstenmetwoord/{id}', [\App\Http\Controllers\TextsContorller::class, 'textsWithWord'])->name('dashboard.tekstenmetwoorden');
Route::get('/dashboard/woorden/', [\App\Http\Controllers\WordsContorller::class, 'index'])->name('dashboard.woorden.index');

