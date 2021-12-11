<?php

namespace App\Http\Controllers;

use App\Http\Requests\EditAppointmentRequest;
use App\Models\Visit;
use App\Models\VisitType;
use App\Models\User;
use Illuminate\Http\Request;

class ReceptionController extends Controller
{
    public function get_home() {

        $visits = Visit::allFullData();
        return view("reception.home", compact('visits'));
    }

    public function del_visit(Request $request) {

        Visit::find($request->get('visit_id'))
            ->delete();
        
        return redirect()->route('reception_home');
    }

    public function get_edit_visit(Request $request) { 

        $visit_id = $request->get('visit_id');
        $specVisit = Visit::find($visit_id);
        
        $doctors = User::allDoctors();
        $visitTypes = VisitType::all();
        $error_message = "";

        $doctor_id = $specVisit->doctor_id;
        $patient_id = $specVisit->patient_id;
        $visit_type_id = $specVisit->visit_type_id;
        $description = $specVisit->description;
        
        $visit_date = explode(' ', $specVisit->date)[0];
        $visit_time = explode(' ', $specVisit->date)[1];


        return view("reception.edit_appointment", 
            compact('doctors', 'visitTypes', 'error_message',
                'doctor_id',
                'visit_type_id',
                'visit_date',
                'visit_time',
                'description',
                'visit_id'
            ));
            
    }

    public function post_edit_visit(EditAppointmentRequest $request) { 
        // Dziala pod warunkiem ze daty i godziny nie zmianiasz

        $visit_id = $request->validated()['visit_id'];
        $specVisit = Visit::find($visit_id);
        
        $visit_date = $request->validated()['visit_date'];
        $visit_time = $request->validated()['visit_time'];
        $date = $visit_date.' '.$visit_time;
        
        $doctor_id = $request->validated()['doctor_id'];
        $patient_id = $request->validated()['patient_id'];
        $visit_type_id = $request->validated()['visit_type_id'];
        $description = $request->validated()['description'];

        if ($specVisit->date == $date) {
            $specVisit->update(compact(
                'patient_id',
                'doctor_id',
                'visit_type_id',
                'description'
            ));

            return redirect()->route('reception_home');
        }

        $checkDateValue = Visit::checkVisitBook($date, $doctor_id);

        if ($checkDateValue == 0) {

            $specVisit->update(compact(
                'patient_id',
                'doctor_id',
                'visit_type_id',
                'date',
                'description'
            ));
    
            return redirect()->route('reception_home');
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
        
        return view("reception.edit_appointment", 
            compact('doctors', 'visitTypes', 'error_message',
                'doctor_id',
                'visit_type_id',
                'visit_date',
                'visit_time',
                'description',
                'visit_id'
            ));
    }

    

    public function get_accounts() {

        $allUsers = User::allUsers();
        return view("reception.accounts", compact('allUsers'));
    }

    public function post_accounts(Request $request) {

        User::where('email', $request->get('user_email'))->first()
            ->update([
                'role_id' => $request->get('role_id')
            ]);
        
        return redirect()->route('reception_accounts');
    }

    public function get_history() {

        $archiveVisits = Visit::allArchiveVisits();
        return view("reception.history", compact('archiveVisits'));
    }

}
