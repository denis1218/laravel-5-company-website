<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Employee extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    public function paysalary(){
        return $this->hasMany(PaySalary::class,'emp_id','id');
    }
}
