<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PanelController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\ReceptionController;

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


// Below uri's for login users
// TUTAJ WRZUCAMY GOTOWE 
Route::group(['middleware' => 'auth'], function() {

    // Patient
    Route::get('/patient_all_doctors', [PatientController::class, 'get_all_doctors']);
    Route::get('/patient_add_appointment', [PatientController::class, 'get_add_appointment']);


    // Reception
    Route::get('/reception_home', [ReceptionController::class, 'get_home']); 



});


// For docktors
Route::get('/panel_doktor', [PanelController::class, 'index_doktor'])->name('panel_doktor');
Route::get('/panel_doktor_archive', [PanelController::class, 'doktor_archive'])->name('panel_doktor_archive');
Route::get('/panel_doktor_visit', [PanelController::class, 'doktor_visit'])->name('panel_doktor_visit');


Route::get('/panel_pacjent', [PanelController::class, 'index_pacjent']);

Route::get('/recepcja_acc', [PanelController::class, 'add_doctor_reception']);
Route::get('/recepcja_history', [PanelController::class, 'reception_history']);