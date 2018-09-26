<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $guarded = ['FK_id_doctor','FK_id_X-Ray','FK_id_X-Treatment','FK_id_X-Payment'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function doctor(){
        return $this->belongsTo(Doctor::class,'FK_id_Doctor','id');
    }
}
