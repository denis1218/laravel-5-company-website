<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TreatmentList extends Model
{
    protected $guarded = [];
    public function treatment(){
        return $this->belongsTo(Treatment::class ,'FK_id_treatment','id');
    }
    public  function patient(){
        return $this->hasManyThrough(Patient::class,Treatment::class);
    }
}
