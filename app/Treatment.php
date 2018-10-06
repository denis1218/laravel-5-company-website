<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Treatment extends Model
{

    protected $guarded = [];
    public function patient()
    {
        return $this->belongsTo(Patient::class, 'patient_id', 'id');
    }

    public function getPatient_idAttribute()
    {
        return $this->patient->id;
    }

    public function income()
    {
        return $this->hasMany(Income::class , 'treatment_id', 'id');
    }

    public function xray(){
        return $this->hasOne(Xray::class);
    }
}
