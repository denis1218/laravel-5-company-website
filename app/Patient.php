<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Contracts\Auditable;

class Patient extends Model implements Auditable
{
    use SoftDeletes;
    use \OwenIt\Auditing\Auditable;

    protected $guarded = [];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function doctor(){
        return $this->belongsTo(Doctor::class,'doctor_id','id');
    }


    public function treatment(){
        return $this->hasMany(Treatment::class,'patient_id','id');
    }

    public function income()
    {
        return $this->hasMany(Income::class , 'patient_id','id');
    }

    public function prescription(){
        return $this->hasMany(Prescription::class,'patient_id','id');
    }

    public function xray()
    {
        return $this->hasMany(XRay::class,'patient_id','id');
    }

    public static function boot() {
        parent::boot();

        static::deleting(function($patient) { // before delete() method call this
            $patient->treatment()->delete();
            // do the rest of the cleanup...
        });
    }




}
