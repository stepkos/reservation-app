<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddAppointmentRequest;
use App\Models\User;
use App\Models\Visit;
use App\Models\VisitType;
use Illuminate\Http\Request;

class PatientController extends Controller
{

    public function get_home() {
        $visits = User::allFutureVisits(auth()->user()->id);
        return view("patient.home", compact('visits'));
    }
    
    public function get_all_doctors() {
        return view("patient.all_doctors", ["doctors" => User::allDoctors()]);
    }
    
    public function get_add_appointment() {
        
        $doctors = User::allDoctors();
        $visitTypes = VisitType::all();
        $error_message = "";

        return view("patient.add_appointment", compact('doctors', 'visitTypes', 'error_message'));
    }

    public function post_add_appointment(AddAppointmentRequest $request) {

        // TODO SPRAWDZ CZY WARTOSCI NIE SA PUSTE
        // moze zrob custom request do walidacji przy okazji czy zasob nalezy do uzytkownika

        $visit_date = $request->validated()['visit_date'];
        $visit_time = $request->validated()['visit_time'];
        $date = $visit_date.' '.$visit_time;
        
        $doctor_id = $request->validated()['doctor_id'];
        $patient_id = $request->validated()['patient_id'];
        $visit_type_id = $request->validated()['visit_type_id'];
        $description = $request->validated()['description'];

        $checkDateValue = Visit::checkVisitBook($date, $doctor_id);

        // ddd($checkDateValue);

        if ($checkDateValue == 0) {

            Visit::create(compact(
                'patient_id',
                'doctor_id',
                'visit_type_id',
                'date',
                'description'
            ));
    
            return redirect()->route('patient_home');
        }

        $doctors = User::allDoctors();
        $visitTypes = VisitType::all();
        $error_message = "Jesli to widzisz to cos jest nie tak";

        switch ($checkDateValue) {
            case -1:
                $error_message = "Data musi byc przyszla";
                break;
            case -2:
                $error_message = "Doktor w tych godzinach nie pracuje";
                break;
            case -3:
                $error_message = "W tym czasie doktor ma inna wizyte";
                break;   
        }
        
        return view("patient.add_appointment", 
            compact('doctors', 'visitTypes', 'error_message',
                'doctor_id',
                'visit_type_id',
                'visit_date',
                'visit_time',
                'description'
            ));

    }
}
