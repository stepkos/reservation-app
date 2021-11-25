<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PanelController extends Controller
{


    public function index(){

        return view("panel");

    }
    public function index_recepcja(){

        return view("recepcja_panel");

    }
    public function index_pacjent(){
        return view("patient_panel");
    }
    public function all_doctors_pacjent(){
        return view("patient_all_doctors");
    }
}
