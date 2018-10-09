<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Treatment extends Model
{
//    protected $dateFormat = 'd.m.Y';
//    protected $dates = ['created_at', 'updated_at', 'published_at', 'deleted_at'];
    // etc...
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
