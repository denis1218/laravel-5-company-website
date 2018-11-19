<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Prescription extends Model
{
    use SoftDeletes;
    public $timestamps= false;


    public function patient()
    {
        return $this->belongsTo(Patient::class, 'patient_id', 'id');
    }

}
