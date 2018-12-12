<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class PaySalary extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    public $timestamps = false;
    public function employee(){
        return $this->belongsTo(Employee::class,'emp_id','id');
    }
}
