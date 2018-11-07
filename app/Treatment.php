<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Treatment extends Model
{
    use SoftDeletes;

    public $timestamps= false;

    protected $guarded = [];

    public function patient()
    {
        return $this->belongsTo(Patient::class, 'patient_id', 'id');
    }

    public function income()
    {
        return $this->hasMany(Income::class , 'treatment_id', 'id');
    }


    public function xray(){
        return $this->hasOne(Xray::class);
    }
}
