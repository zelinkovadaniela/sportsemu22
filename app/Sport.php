<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sport extends Model
{
    protected $table = 'sports';

    protected $fillable = [
        'sport_name'
    ];
    protected $guarded = [
        'id', 'created_at', 'updated_at'
    ];
    //sport has many listings
    public function listing()
    {
        return $this->hasMany('App\Listing');
    }

      public function hasListing()
    {
        return $this->belongsToMany('App\Listing');
    }
}
