<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class XRay extends Model
{
    public function treatment(){
        return $this->belongsTo(Treatment::class , 'FK_id_treatment', 'id');
    }

    public function patient(){
        return $this->belongsTo(Treatment::class , 'FK_id_patient', 'id');
    }

}
