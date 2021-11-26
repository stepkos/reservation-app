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
// Route::get('/panel', [App\Http\Controllers\PanelController::class, 'index']);


Route::get('/panel_recepcja', [App\Http\Controllers\PanelController::class, 'index_recepcja']);


Route::get('panel_doktor', [App\Http\Controllers\PanelController::class, 'index_doktor'])->name('panel_doktor');
Route::get('/panel_doktor_archive', [App\Http\Controllers\PanelController::class, 'doktor_archive'])->name('panel_doktor_archive');
Route::get('/panel_doktor_visit', [App\Http\Controllers\PanelController::class, 'doktor_visit'])->name('panel_doktor_visit');


Route::get('/panel_pacjent', [App\Http\Controllers\PanelController::class, 'index_pacjent']);
Route::get('/panel_all_doctors', [App\Http\Controllers\PanelController::class, 'all_doctors_pacjent']);
Route::get('/panel_make_appointment', [App\Http\Controllers\PanelController::class, 'make_appointment_pacjent']);
