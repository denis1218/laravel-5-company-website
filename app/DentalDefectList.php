<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DentalDefectList extends Model
{
    protected $guarded = [];
    public function treatment(){
        return $this->belongsTo(Treatment::class,'dentalDefect_id','id');
    }
}
