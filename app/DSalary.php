<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DSalary extends Model
{
    public $timestamps=false;
    public function doctor()
    {
        return $this->belongsTo(Doctor::class,'doc_id','id');
    }
}
