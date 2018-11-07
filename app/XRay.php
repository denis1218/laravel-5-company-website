<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Xray extends Model
{
    use SoftDeletes;

    public $timestamps = false;
    public function treatment(){
        return $this->belongsTo(Treatment::class , 'FK_id_treatment', 'id');
    }

    public function patient(){
        return $this->belongsTo(Patient::class , 'patient_id', 'id');
    }


    public function doctor(){
        return $this->belongsTo(Doctor::class,'doctor_id','id');
    }
}
