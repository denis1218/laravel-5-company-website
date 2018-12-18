<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Teeth extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;


    public function treatment(){
        return $this->belongsTo(Teeth::class,'treatment_id','id');
    }
}
