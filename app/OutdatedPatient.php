<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class OutdatedPatient extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    public function outdate(){
        return $this->hasMany(OutdatedReceive::class,'outdated_id','id');
    }
}
