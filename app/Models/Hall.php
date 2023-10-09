<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hall extends Model
{
    use HasFactory;

    protected $fillable = [
        'name' ,'details','image','price','capacity'    
    ];
    
    public function bookings()
    {
    return $this->hasMany(Booking::class);
    }
}
