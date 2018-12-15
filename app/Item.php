<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Item extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    public function trader(){
        return $this->belongsTo(Trader::class);
    }

    public function sum_total_price()
    {
        return $this->sum('total_price');
    }
}
