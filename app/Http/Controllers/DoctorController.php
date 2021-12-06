<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class DoctorController extends Controller
{
    public function get_home() {

        $visits = User::allFutureVisits(auth()->user()->id);
        return view("doctor.home", compact('visits'));
    }

    public function get_home_archive() {

        $visits_archive = User::allArchiveVisits(auth()->user()->id);
        $visits_actual = User::allFutureVisits(auth()->user()->id);
        return view("doctor.home_archive", compact(['visits_archive', 'visits_actual']));
    }

    public function get_visit(){
        $visit = User::currentVisit(auth()->user()->id);
        $patient_archive_visits = User::allArchiveVisits($visit[0]->patient_id);
        return view("doctor.visit", compact(['visit', 'patient_archive_visits']));
    }

}
