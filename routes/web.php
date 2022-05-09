<?php

use App\Http\Controllers\BannerController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\WelcomeController;
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

Route::get('/', [WelcomeController::class, 'index'])->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

/* Dashboard Routes */
Route::get('dashboard/banner', [BannerController::class, 'index'])->name('banner.index');
Route::get('dashboard/banner/{}', [BannerController::class, 'edit'])->name('banner.edit');
Route::post('dashboard/banner/{}', [BannerController::class, 'update'])->name('banner.update');
Route::resource('dashboard/services', ServiceController::class);
Route::resource('dashboard/clients', ClientController::class);