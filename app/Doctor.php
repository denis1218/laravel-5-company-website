<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\Request;
use OwenIt\Auditing\Contracts\Auditable;

class Doctor extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    use SoftDeletes;

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

    public function dsalary(){
        return $this->hasMany(DSalary::class,'doc_id','id');
    }


}
