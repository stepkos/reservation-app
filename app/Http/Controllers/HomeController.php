<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        switch (auth()->user()->role_id) {
            case 1:
                return redirect()->route('patient_home');
            case 2:
                return redirect()->route('doctor_home');
            case 3:
                return redirect()->route('reception_home');
        }

        // return view('home');
    }
}
