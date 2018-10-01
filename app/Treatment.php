<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Treatment extends Model
{

    protected $guarded = [];
    public function patient()
    {
        return $this->belongsTo(Patient::class, 'FK_id_patient', 'id');
    }

    public function TreatmentLists()
    {
        return $this->hasMany(TreatmentList::class, 'FK_id_treatment', 'id');
    }

    public function DentalDefectLists()
    {
        return $this->hasMany(DentalDefectList::class,'FK_id_dentalDefect','id');
    }

}
