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


// Below uri's for login users
Route::group(['middleware' => 'auth'], function() {

    // Patient
    Route::get('/patient_home', [PatientController::class, 'get_home']);
    Route::get('/patient_all_doctors', [PatientController::class, 'get_all_doctors']);
    Route::get('/patient_add_appointment', [PatientController::class, 'get_add_appointment']);

    // Reception
    Route::get('/reception_home', [ReceptionController::class, 'get_home']); 

    // For doctor

    // ------------------------------------------------ //
    //      Not complete yet (doesnt show the data)     //
    // ------------------------------------------------ //
    Route::get('/doctor_home', [DoctorController::class, 'get_home'])->name('doctor_home');
    Route::get('/doctor_home_archive', [DoctorController::class, 'get_home_archive'])->name('doctor_home_archive');
    Route::get('/doktor_visit', [DoctorController::class, 'get_visit'])->name('doktor_visit');
    
    Route::get('/reception_accounts', [ReceptionController::class, 'get_accounts']);
    Route::get('/reception_history', [ReceptionController::class, 'get_history']);

});


