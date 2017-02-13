<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    public function listing()
    {
        return $this->belongsTo('App\Listing');
    }

    protected $table = 'bookings'; // you may change this to your name table
    public $timestamps = true; // set true if you are using created_at and updated_at
    protected $primaryKey = 'id'; // the default is id

}
