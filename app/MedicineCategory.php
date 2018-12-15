<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class MedicineCategory extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    //
}
