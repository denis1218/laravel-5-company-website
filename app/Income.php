<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Contracts\Auditable;

class Income extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
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
