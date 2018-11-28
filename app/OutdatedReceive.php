<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OutdatedReceive extends Model
{
    public $timestamps= false;
    public function outdatepatient(){
        return $this->belongsTo(OutdatedPatient::class,'outdated_id','id');
    }
}
