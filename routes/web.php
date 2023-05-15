<?php

use App\Http\Controllers\Admin\DashboardAdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [HomeController::class, 'index_home'])->name('index_home');
Route::get('/category', [HomeController::class, 'categori_home'])->name('categori_home');

Auth::routes();

Route::middleware('auth', 'checkroll:admin')->group(function () {
    Route::get('/dashboard-admin', [DashboardAdminController::class, 'dashboard_admin'])->name('dashboard_admin');
});
