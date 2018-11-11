<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TreatmentList extends Model
{
    use SoftDeletes;

    protected $guarded = [];

    public function treatments(){
        return $this->belongsTo(Treatment::class,'treatment_id','id');
    }

    public  function patient(){
        return $this->hasManyThrough(Patient::class,Treatment::class);
    }

}
