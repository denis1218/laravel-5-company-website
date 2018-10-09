<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Treatment extends Model
{
    public $table = 'treatments';

    protected $guarded = [];
    public  $timestamps = false;
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
