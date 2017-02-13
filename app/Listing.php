<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    protected $table = 'listings';

    protected $fillable =
        ['name','slug','sport_id', 'gps_lat', 'gps_long', 'street', 'house_nr', 'city', 'postcode', 'country', 'description', 'bus','tram','metro','user_id','map','img','monday','tuesday','wednesday','thursday','friday','saturday','sunday', 'price'];
    protected $guarded =
        ['id', 'created_at', 'updated_at'];

    //Listing has multiple availability
    public function availabilities()
    {
        return $this->hasMany('App\Availability');
    }

    //Listing has multiple bookings
    public function bookings()
    {
        return $this->hasMany('App\Booking');
    }

    //Listing belongs to a user based on the user_id
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    //Listing has many images
    public function images()
    {
        return $this->hasMany('App\Image');
    }
    //Listing belongs to a specific sport
    public function sports()
    {
        return $this->hasMany('App\Sport');
    }

    public function hasSports()
    {
        return $this->belongsToMany('App\Sport');
    }
        




}



