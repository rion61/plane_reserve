<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    public function getUserNameById($plane_id)
    {
        return DB::table('bookings')
            ->join('users', 'bookings.user_id', '=', 'users.id')
            ->where('bookings.plane_id', '=',$plane_id)->get();
    }
}

