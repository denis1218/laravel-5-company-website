<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable=['id','first_name','last_name','father_name','start_work_time','end_work_time','phone','dept_id','gender','salary_type','salary_amount'];

    public function patients(){
        return $this->hasMany(Patient::class,'doctor_id','id');
    }
}
