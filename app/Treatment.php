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





}
