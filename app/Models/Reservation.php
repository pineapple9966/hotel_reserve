<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'hotel_id',
        'checkin_date',
        'chackout_date',
        'total_price',
        'use_point',
        'checked_in',
        'checked_out',
    ];
}
