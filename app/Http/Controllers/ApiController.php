<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ApiController extends Controller
{
    function doctorHoursJSON($doctor_id){

        $workHours = User::doctorWorkHours($doctor_id);
        return response()->json($workHours);
    }

}
