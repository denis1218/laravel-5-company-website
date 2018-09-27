<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TreatmentList extends Model
{
    public function treatment(){
        return $this->belongsTo(Treatment::class ,'FK_id_treatment','id');
    }
}
