<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DoctorDepartment extends Model
{
    use SoftDeletes;

    protected $guarded = [];
}
