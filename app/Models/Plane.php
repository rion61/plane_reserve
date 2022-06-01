<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plane extends Model
{
    use HasFactory;

    public function users()
    {
        return $this->belongsToMany(User::class,'bookings','plane_id','user_id')->withTimestamps();
    }

    public function bookings()
    {
        return $this->hasMany(booking::class);
    }

}


