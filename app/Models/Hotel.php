<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'photo',
        'price',
    ];

    public function price()
    {
        if (in_array(\Carbon\Carbon::now()->dayOfWeek, [0, 6, 2])) {
            return floor($this->price * 1.01);
        } else {
            return $this->price;
        }
    }
}
