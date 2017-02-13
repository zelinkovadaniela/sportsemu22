<?php namespace App;

use Illuminate\Database\Eloquent\Model;
 
class UserDetail extends Model 
{
    // does nothing more than 
    // specify the table in the database
    protected $table = 'user_details';

    public function userDetails()
    {
    return $this->belongsTo('App\Users');
    }

      public function registeruser()
    {
    return $this->belongsTo('App\User', 'user_id');
    }

}

?>