<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use DB;

class Visit extends Model
{
    use HasFactory;


    public static function fullData($visit_id){
        return DB::table('full_visit_view')
                    ->where('visit_id','=',$visit_id)
                    ->get();
    }
}
