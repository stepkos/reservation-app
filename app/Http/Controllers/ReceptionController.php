<?php

namespace App\Http\Controllers;

use App\Models\Visit;
use Illuminate\Http\Request;

class ReceptionController extends Controller
{
    public function get_home() {

        $visits = Visit::allFullData();
        // ddd($visits);
        return view("reception.home", compact('visits'));
    }

}
