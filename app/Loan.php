<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Loan extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    public function trader()
    {
        return $this->belongsTo(Trader::class);
    }
}
