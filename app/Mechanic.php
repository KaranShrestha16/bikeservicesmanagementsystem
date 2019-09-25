<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mechanic extends Model
{
    protected $guarded=[];
    
    public function bookings(){
        return $this->hasMany(Booking::class);
    }
    
}
