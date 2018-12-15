<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class DSalary extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    public $timestamps=false;
    public function doctor()
    {
        return $this->belongsTo(Doctor::class,'doc_id','id');
    }
}
