<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    public function trader(){
        return $this->belongsTo(Trader::class);
    }
}
