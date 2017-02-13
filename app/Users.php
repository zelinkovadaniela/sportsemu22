<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Cashier\Billable;

class Users extends Model
{
    use Billable;
    // does nothing more than 
    // specify the table in the database
    protected $table = 'Users';

    public function userInfos()
    {
    return $this->hasMany('App\UserDetail','user_id');
    }

    //A listing is owned by a user
    public function listing()
    {
        return $this->hasMany('App\Listing');
    }

}

?>