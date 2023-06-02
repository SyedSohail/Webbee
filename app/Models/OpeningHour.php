<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OpeningHour extends Model
{
    protected $fillable = [
        'day',
        'start_time',
        'end_time',
        'service_id',
    ];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
