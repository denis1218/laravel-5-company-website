<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OutdatedPatient extends Model
{
    public function outdate(){
        return $this->hasMany(OutdatedReceive::class,'outdated_id','id');
    }
}
