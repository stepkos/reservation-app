<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class DoctorController extends Controller
{
    public function get_home() {

        // $visits = auth()->user()->visit_doctor;

        $visits = User::allFutureVisits(auth()->user()->id);
        // ddd($vistis);
        return view("doctor.home", compact('visits'));
    }

    public function get_home_archive() {
        return view("doctor.home_archive");
    }

    public function get_visit(){
        return view("doctor.visit");
    }

}
