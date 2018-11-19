<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    public function paysalary(){
        return $this->hasMany(PaySalary::class,'emp_id','id');
    }
}
