<?php namespace App;

use Illuminate\Database\Eloquent\Model;
 
class Availability extends Model 
{
    // does nothing more than 
    // specify the table in the database
    protected $table = 'availability';

      public function listing()
    {
        return $this->belongsTo('App\Listing');
    }

    protected $fillable = [
        'user_id', 'listing_id','from', 'until',

    ];
}

?>