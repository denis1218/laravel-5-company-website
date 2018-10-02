<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Treatment extends Model
{

    protected $guarded = [];
    public function patient()
    {
        return $this->belongsTo(Patient::class, 'patient_id', 'id');
<<<<<<< HEAD
    }

    public function income()
    {
        return $this->hasMany(Income::class , 'treatment_id', 'id');
    }

=======
>>>>>>> mahdi2013safari-master

    }
    public function xray(){
        return $this->hasOne(Xray::class);
    }
}
