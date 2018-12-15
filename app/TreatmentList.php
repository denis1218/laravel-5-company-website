<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Contracts\Auditable;

class TreatmentList extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    use SoftDeletes;

    protected $guarded = [];

    public function treatments(){
        return $this->belongsTo(Treatment::class,'treatment_id','id');
    }

    public  function patient(){
        return $this->hasManyThrough(Patient::class,Treatment::class);
    }

}
