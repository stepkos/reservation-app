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
        
        return view("patient.add_appointment", compact('doctors', 'visitTypes'));
    }

    public function post_add_appointment(Request $request) {

        $dateOfVisit = $request->get('visit_date').' '.$request->get('visit_time');

        Visit::create([
            'patient_id' => $request->get('patient_id'),
            'doctor_id' => $request->get('doctor_id'),
            'visit_type_id' => $request->get('visit_type_id'),
            'date' => $dateOfVisit,
            'description' => $request->get('description')
        ]);

        return redirect()->route('patient_add_appointment');
    }
}
