<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\SiteController;
use App\Http\Controllers\Dashboard\DashboardController;

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

/**
 * Site
 */

Route::get('/', [SiteController::class, 'home'])->name('site.home');
Route::get('/inicio', [SiteController::class, 'home'])->name('site.home');

/**
 * Dashboard
 */

Route::prefix('painel-de-controle')->group(function () {

    Route::get('/', [DashboardController::class, 'home'])->name('dashboard.home');
    Route::get('/inicio', [DashboardController::class, 'home'])->name('dashboard.home');

});
