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

    public function del_visit(Request $request) {

        Visit::find($request->get('visit_id'))
            ->delete();
        
        return redirect()->route('reception_home');
    }

    public function get_accounts() {

        $allUsers = User::allUsers();
        return view("reception.accounts", compact('allUsers'));
    }

    public function post_accounts(Request $request) {

        User::where('email', $request->get('user_email'))->first()
            ->update([
                'role_id' => $request->get('role_id')
            ]);
        
        return redirect()->route('reception_accounts');
    }

    public function get_history() {

        $archiveVisits = Visit::allArchiveVisits();
        return view("reception.history", compact('archiveVisits'));
    }

}
