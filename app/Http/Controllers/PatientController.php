<?php

namespace App\Http\Controllers;

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

    public function post_add_appointment(Request $request) {

        $dateOfVisit = $request->get('visit_date').' '.$request->get('visit_time');
        $doctor_id = $request->get('doctor_id');

        $checkDateValue = Visit::checkVisitBook($dateOfVisit, $doctor_id);

        if ($checkDateValue == 0) {

            Visit::create([
                'patient_id' => $request->get('patient_id'),
                'doctor_id' => $doctor_id,
                'visit_type_id' => $request->get('visit_type_id'),
                'date' => $dateOfVisit,
                'description' => $request->get('description')
            ]);
    
            return redirect()->route('patient_add_appointment');
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
        
        return view("patient.add_appointment", compact('doctors', 'visitTypes', 'error_message'));

    }
}
