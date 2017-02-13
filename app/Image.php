<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{

    protected $fillable = [
        'listing_id', 'path'
    ];
    protected $guarded = [
        'id',
    ];
    public $timestamps = false;

    //image belongs to a specific listing based on the listing_id;
    public function listings()
    {
        return $this->belongsTo('App\Listing');
    }
}
