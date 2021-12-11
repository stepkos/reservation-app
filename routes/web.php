<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PatientController;
use App\Http\Controllers\ReceptionController;
use App\Http\Controllers\DoctorController;



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Below uri's for loged users
Route::group(['middleware' => 'auth'], function() {
    
    Route::post("/doctorWorkHours/{doctor_id}", [App\Http\Controllers\ApiController::class, 'doctorHoursJSON']);

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

        Route::get('/edit_visit', [ReceptionController::class, 'get_edit_visit'])->name('get_edit_visit');
        Route::post('/edit_visit', [ReceptionController::class, 'post_edit_visit'])->name('post_edit_visit');
        
        Route::get('/reception_accounts', [ReceptionController::class, 'get_accounts'])->name('reception_accounts');
        Route::post('/reception_accounts', [ReceptionController::class, 'post_accounts']);

        Route::get('/reception_history', [ReceptionController::class, 'get_history'])->name('reception_history');

    });
    
    // Doctor
    Route::group(['middleware' => 'checkDoctor'], function() {

        Route::get('/doctor_home', [DoctorController::class, 'get_home'])->name('doctor_home');

        Route::get('/doctor_home_archive', [DoctorController::class, 'get_home_archive'])->name('doctor_home_archive');

        Route::get('/doctor_visit', [DoctorController::class, 'get_visit'])->name('doctor_visit');
        // TODO POST Edycja wizyty (uzyj tego samego formularza)

    });

});


