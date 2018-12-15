<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Contracts\Auditable;

class DentalDefectList extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    protected $guarded = [];
    use SoftDeletes;

}
