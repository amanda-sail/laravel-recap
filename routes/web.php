<?php

use App\Http\Controllers\BannerController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\Newsletter;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;
use App\Mail\SubscribeMail;
use App\Models\Subscribe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
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

/* Dashboard Routes with Admin Only Restriction */
Route::middleware('admin')->group(function () {   
    Route::get('dashboard/banner/{}', [BannerController::class, 'edit'])->name('banner.edit');
    Route::post('dashboard/banner/{}', [BannerController::class, 'update'])->name('banner.update');
});

/* Dashboard Routes */
Route::get('dashboard/banner', [BannerController::class, 'index'])->middleware(['auth'])->name('banner.index');
Route::resource('dashboard/newsletter', NewsletterController::class);
Route::resource('dashboard/emails', EmailController::class);
Route::resource('dashboard/services', ServiceController::class);
Route::resource('dashboard/clients', ClientController::class);
Route::resource('dashboard/users', UserController::class);

/* Mail Routes */
Route::get('/email', [NewsletterController::class, 'send'])->name('subscribe');