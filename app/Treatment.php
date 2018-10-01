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

    public function treatment_list()
    {
        return $this->hasMany(TreatmentList::class, 'treatment_id', 'id');
    }

    public function DentalDefectLists()
    {
        return $this->hasMany(DentalDefectList::class,'dentalDefect_id','id');
    }

}
