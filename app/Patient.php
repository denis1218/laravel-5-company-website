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

    public function treatments(){
        return $this->hasMany(Treatment::class,'patient_id','id');
    }


}
