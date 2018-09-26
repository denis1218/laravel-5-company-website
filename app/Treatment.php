<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Treatment extends Model
{
    protected $table = 'treatments';

    public function patient(){
        return $this->belongsTo(Patient::class,'FK_id_patient', 'id');
    }

}
