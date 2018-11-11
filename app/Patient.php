<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Patient extends Model
{
    use SoftDeletes;

    protected $guarded = [];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function doctor(){
        return $this->belongsTo(Doctor::class,'doctor_id','id');
    }


    public function treatment(){
        return $this->hasMany(Treatment::class,'patient_id','id');
    }

    public function income()
    {
        return $this->hasMany(Income::class , 'patient_id','id');
    }
    public function prescription(){
        return $this->hasMany(Prescription::class,'patient_id','id');
    }


}
