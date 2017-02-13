<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserDetail;
use App\Users;
use App\Listing;
use App\Booking;
use View;
use Auth;

class ApiController extends Controller
{
    public function profile()
    {
        return response()->json(
        // $details = Users::get()
        $details = UserDetail::where('id' ,'1')->get()
        // $details = UserDetail::where('id' , Auth::user()->id)->get()->first()
        );
        // dd($details);


    }


    public function profile_get()
    {
     $details = UserDetail::where('user_id' , Auth::user()->id )->get()->first();

        if(!$details) {
            $details = new UserDetail;
            $details->user_id = Auth::user()->id ;
        }
        $details->name          = Input::get('name');
        $details->address       = Input::get('address');
        $details->phone         = Input::get('phone');
        $details->personal_info = Input::get('personal_info');
        $details->date_of_birth = Input::get('date_of_birth');
        $details->save();

        // redirect
        Session::flash('message', 'Successfully updated!');
        return redirect('profile');
    }



    public function listings()
    {
        return response()->json(
        // $details = Users::get()
        $listings = Listing::with('hasSports')->get()
        // $details = UserDetail::where('id' , Auth::user()->id)->get()->first()
        );


    }

	public function bookings()
	{
		return response()->json(

			$bookings = Booking::get()
		);
	}


}
