<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;
    protected $fillable = [
        'service_id',
        'name',
        'email',
        'phone',
        'address',
        'date',
        'time',
    ];
    public function service()
    {
        return $this->belongsTo(Service::class,'service_id');
    }
}
