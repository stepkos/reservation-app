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

        $visits = User::allArchiveVisits(auth()->user()->id);
        return view("doctor.home_archive", compact('visits'));
    }

    public function get_visit(){
        return view("doctor.visit");
    }

}
