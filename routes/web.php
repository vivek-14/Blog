<?php

use App\Http\Controllers\DashbaordController;
use App\Http\Controllers\NewsLetterController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LanguageController;
use Illuminate\Support\Facades\Route;

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

Route::resource('register', UserController::class)->middleware('guest');

/* Authentication Routes */
Route::group(['prefix' => 'session'], function () {
    Route::get('/', [SessionController::class, 'show'])->name('login')->middleware('guest');
    Route::post('/', [SessionController::class, 'authenticate'])->name('login.auth')->middleware('guest');
    Route::post('/logout', [SessionController::class, 'destroy'])->name('logout')->middleware('auth');
});

Route::get('/change-language/{locale}', [LanguageController::class, 'changeLanguage'])->name('change.language');

/** Newsletter */
Route::group(['prefix' => 'newsletter'], function () {
    Route::post('/subscribe', [NewsLetterController::class, 'add'])->name('newsletter.subscribe');
});


/* Dashboard */
Route::group(['prefix' => 'dashboard'], function () {
    //
});