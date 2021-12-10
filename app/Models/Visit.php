<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use DB;

class Visit extends Model
{
    use HasFactory;

    protected $fillable = [
        'patient_id',
        'doctor_id',
        'visit_type_id',
        'date',
        'description',
    ];

    public static function allFullData() {
        return DB::table('full_visit_view')
                    ->get();
    }

    public static function fullData($visit_id) {
        return DB::table('full_visit_view')
                    ->where('visit_id','=',$visit_id)
                    ->get();
    }


    public static function allArchiveVisits(){
        return DB::table('full_visit_view')
                    ->whereRaw('date < now()')
                    ->get();
    }

    public static function checkVisitBook($datetime_entered, $doctor_id) {   // format daty : '2021-12-09 09:00:00'

        $realDateEntered = strtotime( $datetime_entered );

        // nie można rezerwować wizyty w przeszłości
        if($realDateEntered < time())
            return -1;

        $doctorWorkHours = array_values( (array)User::doctorWorkHours($doctor_id)[0] );
        $indexWeekDay =  intval( date('w', strtotime($datetime_entered)) );


        $beginHour = strtotime( $doctorWorkHours[$indexWeekDay * 2] );
        $endHour = strtotime( $doctorWorkHours[$indexWeekDay * 2 + 1] );
        $hourEntered = strtotime( substr($datetime_entered, 10, 18) );

        // nie można rezerwować wizyty poza godzinami przyjęć doktora
        if($hourEntered < $beginHour || $hourEntered > $endHour)
            return -2;
        

        $doctorVisitsThatDay = User::allVisitsOnDay($doctor_id, substr($datetime_entered, 0, 10));

        foreach($doctorVisitsThatDay as $visit) {
            $beginVisit = strtotime($visit->date);
            $endVisit = strtotime($visit->estimated_end);

            // nie można rezerwować godziny, w czasie kiedy doktor ma inne spotkanie
            if($realDateEntered > $beginVisit && $realDateEntered < $endVisit)
                return -3;
        }

        
        // można zarezerwować wizytę
        return 0;   
    }
}
