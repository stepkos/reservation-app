<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\User_data;
use App\Models\WorkHours;
use App\Models\Visit;

use DB;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function user_data()
    {
        return $this->hasOne(User_data::class, 'id');
    }

    public function work_hours()
    {
        return $this->hasOne(WorkHours::class, 'id_doctor');
    }

    public function visit_patient(){
        return $this->hasMany(Visit::class, 'id_patient');
    }

    
    public function visit_doctor(){
        return $this->hasMany(Visit::class, 'id_doctor');
    }



    public static function allDoctors(){
        return DB::table('users')
                ->join('user_datas', 'users.id', '=','user_datas.id')
                ->where('user_datas.role_id', 2)
                ->get();
    }

    public static function allPatients(){
        return DB::table('users')
                ->join('user_datas', 'users.id', '=','user_datas.id')
                ->where('user_datas.role_id', 1)
                ->get();
    }
    public static function allReception(){
        return DB::table('users')
                ->join('user_datas', 'users.id', '=','user_datas.id')
                ->where('user_datas.role_id', 3)
                ->get();
    }

    public static function doctorWorkHours($doctor_id){ //jeżeli podano użytkownika, która nie jest doktorem zwraca null
        $workHours = DB::table('users')
                    ->join('work_hours', 'users.id','=','work_hours.doctor_id')
                    ->where('users.id',$doctor_id)
                    ->get();
        
        return ($workHours != []) ? $workHours : null;
    }

    public static function role($user_id){  // zwraca stringa reprezentującego role ['Patient', 'Doctor', 'Reception']
        return DB::table('users')
                ->join('user_datas', 'users.id','=','user_datas.id')
                ->join('roles', 'user_datas.role_id','=','roles.id')
                ->where('users.id',$user_id)
                ->get(['roles.role'])
                ->toArray()[0]['role'];
    }

    public static function allVisits($user_id){ // nie identyfikuje roli użytkownika
            return DB::table('full_visit_view')
                        ->where('patient_id','=',$user_id)
                        ->orWhere('doctor_id','=',$user_id)
                        ->get();
    }


}
