<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TreatmentList extends Model
{
    protected $guarded = [];

    public function treatments(){
        return $this->belongsTo(Treatment::class,'treatment_id','id');
    }

}
