<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TreatmentList extends Model
{
    protected $guarded = [];

    public function treatments(){
        return $this->belongsTo(Treatment::class,'treatment_id','id');
    }

    public  function patient(){
        return $this->hasManyThrough(Patient::class,Treatment::class);
    }

}
