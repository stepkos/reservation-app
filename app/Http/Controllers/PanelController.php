<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PanelController extends Controller
{

    public function index_doktor(){
        return view("doktor_panel");
    }

    public function doktor_archive(){
        return view("doktor_archive");
    }

    public function doktor_visit(){
        return view("doktor_visit");
    }

    public function index_pacjent(){
        return view("patient_panel");
    }

    public function add_doctor_reception(){
        return view("recepcja_acc");
    }
    public function reception_history(){
        return view("reception_history");
    }
}
