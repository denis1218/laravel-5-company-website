<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prescription extends Model
{
    public function patient()
    {
        return $this->belongsTo(Patient::class, 'patient_id', 'id');
    }

}
