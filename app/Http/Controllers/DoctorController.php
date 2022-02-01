<?php
/**
 * DoctorController.php
 * @author    Jakub Stępkowski <stepkos@example.com>>
 * @copyright 2022 CrazyDevelopers
 * @license   All rights reserved
 * @see       https://github.com/stepkos/ReservationApp
 * @version   1.0.0
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Visit;

class DoctorController extends Controller
{

    /**
     * Gets future visits of doctor and renders its home pannel
     *
     * @param null
     *
     * @return View
     */
    public function get_home() {

        $visits = User::allFutureVisits(auth()->user()->id);
        return view("doctor.home", compact('visits'));
    }

    /**
     * Gets future and archive visits of doctor and renders its home_archive pannel
     *
     * @param null
     *
     * @return View
     */
    public function get_home_archive() {

        $visits_archive = User::allArchiveVisits(auth()->user()->id);
        $visits_actual = User::allFutureVisits(auth()->user()->id);
        return view("doctor.home_archive", compact(['visits_archive', 'visits_actual']));
    }

    /**
     * Shows current visit and data related to it
     * If no current visit is being held at the moment, shows time of next visit
     *
     * @param null
     *
     * @return View
     */
    public function get_visit() {
        $visit = User::currentVisit(auth()->user()->id);

        if($visit != null && $visit != []) {
            $patient_archive_visits = User::allArchiveVisits($visit[0]->patient_id);
            return view("doctor.visit", compact(['visit', 'patient_archive_visits']));
        }

        $nextVisit = User::nextVisit(auth()->user()->id);
        return view("doctor.no-visit", compact('nextVisit'));
    }

    /**
     * Post method for visit_card_view
     *
     * @param null
     *
     * @return View
     */
    public function post_visit(Request $request) {
        Visit::find($request->get('visit_id'))->update([
            'description' => $request->get('desc')
        ]);
        
        return redirect()->route('doctor_home');
    }

}
