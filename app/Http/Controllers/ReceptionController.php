<?php

namespace App\Http\Controllers;

use App\Models\Visit;
use App\Models\User;
use Illuminate\Http\Request;

class ReceptionController extends Controller
{
    public function get_home() {

        $visits = Visit::allFullData();
        return view("reception.home", compact('visits'));
    }

    public function get_accounts() {

        $allUsers = User::allUsers();
        return view("reception.accounts", compact('allUsers'));
    }

    public function get_history() {
        return view("reception.history");
    }

}
