<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Comment;
use App\Models\Category;

class Service extends Model
{
    use HasFactory;
    #many to one
    public function appointment()
    {
        return $this->hasMany(Appointment::class);
    }
}
