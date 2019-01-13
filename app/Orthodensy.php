<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Orthodensy extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    public function patient(){
        return $this->BelongsTo(Patient::class,'patient_id','id');
    }
    public function treatment(){
        return $this->BelongsTo(Treatment::class,'treatment_id','id');

    }

}
