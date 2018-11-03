<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Http\Request;

class Doctor extends Model
{
    protected $fillable=['id','first_name','last_name','father_name','start_work_time','end_work_time','phone','dept_id','gender','salary_type','salary_amount'];

    public function patient(){
        return $this->hasMany(Patient::class,'doctor_id','id');
    }

    public function patient_for_today(){
        return $this->hasMany(Patient::class,'doctor_id','id')->whereDate('next_appointment',Carbon::today());
    }

    public function patient_for_next_day(){
        return $this->hasMany(Patient::class,'doctor_id','id')->whereDate('next_appointment','>',Carbon::today());
    }

    public function user()
    {
        return $this->belongsTo('users','doctor_id', 'id');
    }



    public function xray(){
        return $this->hasMany(Xray::class);
    }

    public function treatment(){
        $first = Carbon::now()->startOfMonth()->toDateString();
        if ($this->to != null){
            return $this->hasManyThrough(Treatment::class ,Patient::class)->whereDate('treatments.created_at','>',$this->to);
        } else{
            return $this->hasManyThrough(Treatment::class ,Patient::class)->whereDate('treatments.created_at','>=',$first);
        }
    }


}
