<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaySalary extends Model
{
    public $timestamps = false;
    public function employee(){
        return $this->belongsTo(Employee::class,'emp_id','id');
    }
}
