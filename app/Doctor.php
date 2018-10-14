<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
class Doctor extends Model
{
    protected $fillable=['id','first_name','last_name','father_name','start_work_time','end_work_time','phone','dept_id','gender','salary_type','salary_amount'];

    public function patient(){
        return $this->hasMany(Patient::class,'doctor_id','id');
    }

    public function patient_for_today(){
        return $this->hasMany(Patient::class,'doctor_id','id')->whereDate('updated_at',Carbon::today());
    }


    public function xray(){
        return $this->hasMany(Xray::class);
    }

    public function treatment(){
        return $this->hasManyThrough(Treatment::class ,Patient::class);
    }


}
