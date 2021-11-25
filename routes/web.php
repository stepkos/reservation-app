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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/panel', [App\Http\Controllers\PanelController::class, 'index']);
Route::get('/panel_recepcja', [App\Http\Controllers\PanelController::class, 'index_recepcja']);
Route::get('/panel_doktor', [App\Http\Controllers\PanelController::class, 'index_doktor']);
