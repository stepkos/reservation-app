<?php

use App\Http\Controllers\DoctorController;
use Illuminate\Support\Facades\Route;

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

// Below uri's for loged users
Route::group(['middleware' => 'auth'], function() {
    
    //Patient
    Route::group(['middleware' => 'checkPatient'], function() {

        Route::get('/patient_home', [PatientController::class, 'get_home'])->name('patient_home');
        Route::get('/patient_all_doctors', [PatientController::class, 'get_all_doctors'])->name('patient_all_doctors');
        Route::get('/patient_add_appointment', [PatientController::class, 'get_add_appointment'])->name('patient_add_appointment');
        Route::post('/patient_add_appointment', [PatientController::class, 'post_add_appointment']);

    });
    
    // Reception
    Route::group(['middleware' => 'checkReception'], function() {

        Route::get('/reception_home', [ReceptionController::class, 'get_home'])->name('reception_home'); 
        Route::post('/del_visit', [ReceptionController::class, 'del_visit'])->name('del_visit');
        Route::get('/reception_history', [ReceptionController::class, 'get_history'])->name('reception_history');

        Route::get('/reception_accounts', [ReceptionController::class, 'get_accounts'])->name('reception_accounts');
        Route::post('/reception_accounts', [ReceptionController::class, 'post_accounts']);

        // TODO POST edycja wizyty (uzyj formularza z dodawania wizyty)

    });
    
    // Doctor
    Route::group(['middleware' => 'checkDoctor'], function() {

        Route::get('/doctor_home', [DoctorController::class, 'get_home'])->name('doctor_home');
        Route::get('/doctor_home_archive', [DoctorController::class, 'get_home_archive'])->name('doctor_home_archive');
        Route::get('/doctor_visit', [DoctorController::class, 'get_visit'])->name('doctor_visit');
       
        // TODO POST aktualna wizyta

        // TODO POST Edycja wizyty (uzyj tego samego formularza)

    });

});


