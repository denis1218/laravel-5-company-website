<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    public function trader(){
        return $this->belongsTo(Trader::class);
    }

    public function sum_total_price()
    {
        return $this->sum('total_price');
    }
}
