<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Income extends Model
{
    use SoftDeletes;

    protected $guarded = [];

    public function patient()
    {
        return $this->belongsTo(Patient::class,'patient_id','id');
    }

    public function treatment()
    {
        return $this->belongsTo(Treatment::class,'treatment_id','id');
    }

    public function xray()
    {
        return $this->belongsTo(XRay::class , 'xray_id', 'id');
    }

}
