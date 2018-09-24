<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $guarded = ['FK_id_doctor','FK_id_X-Ray','FK_id_X-Treatment','FK_id_X-Payment'];
}
