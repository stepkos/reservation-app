<?php

namespace App\Http\Controllers;

use App\Models\User;
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
}
