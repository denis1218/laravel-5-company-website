<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Contracts\Auditable;

class Xray extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
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
