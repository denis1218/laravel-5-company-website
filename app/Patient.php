<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $guarded = [];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function doctor(){
        return $this->belongsTo(Doctor::class,'doctor_id','id');
    }

<<<<<<< HEAD

    public function treatment(){
        return $this->hasMany(Treatment::class,'patient_id','id');
    }

    public function income()
    {
        return $this->hasMany(Income::class , 'patient_id','id');
    }


=======
    public function xray(){
        return $this->hasMany(Xray::class);
    }

    public function treatments(){
        return $this->hasMany(Treatment::class,'patient_id','id');
    }
>>>>>>> mahdi2013safari-master
}
