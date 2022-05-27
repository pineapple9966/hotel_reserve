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
        'checkout_date',
        'total_price',
        'checked_in',
        'checked_out',
    ];

    public function hotel()
    {
        return $this->belongsTo('App\Models\Hotel');
    }
}
