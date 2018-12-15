<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Trader extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    public function item(){
        return $this->hasMany(Item::class);
    }
    public function loan(){
        return $this->hasMany(Loan::class);
    }
}
