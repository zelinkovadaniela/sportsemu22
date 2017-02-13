<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserDetail;
use App\Users;
use View;
use Auth;
use Image;
use Validator;
use Session;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\RedirectResponse;



class UserController extends Controller
{
    // public function index($name)
    // {
    //     $details = Users::with('userinfos')->whereName($name)->get();
    //     return View::make('pages.profile')->with('details', $details);
    // }


    public function __construct()
    {
        $this->middleware('auth');

    }
    
    public function index(){
        $details = UserDetail::where('id' , Auth::user()->id)->get()->first();
      
         if(!$details) { $details = new UserDetail;} 
    //   dd($details);


        return view('pages.profile', array('user' => Auth::user(),'details' => $details));
    }

    public function update_avatar(Request $request) {

        // Handle the user upload of update_avatar
        $details = Users::with('userinfos')->get();

        if($request->hasfile('avatar')){
        $orig_file_path = public_path("/uploads/avatars/" . Auth::user()->avatar);
        // Check if user already has an image and if so remove the file unless it is the default.jpg file
        if (file_exists($orig_file_path) && $orig_file_path !=public_path('uploads/avatars/' . 'default.jpg' )){
            unlink($orig_file_path);
        }
        $avatar = $request->file('avatar');
        $filename = Auth::user()->id . '-' . time() . '.' . $avatar->getClientOriginalExtension();
        Image::make($avatar)->resize(300, 300)->save( public_path('uploads/avatars/' . $filename ) );

        $user = Auth::user();
        $user->avatar = $filename;
        $user->save();
        }
        return redirect('profile');
    }

    public function update(Request $request)
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
    

        // Test controller functions

        

}
