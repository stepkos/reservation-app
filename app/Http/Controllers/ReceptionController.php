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

    public function get_accounts() {
        return view("reception.accounts");
    }

    public function get_history() {
        return view("reception.history");
    }

}
