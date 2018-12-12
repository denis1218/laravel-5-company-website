<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class OutdatedReceive extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    public $timestamps= false;
    public function outdatepatient(){
        return $this->belongsTo(OutdatedPatient::class,'outdated_id','id');
    }
}
