<?php

namespace App\Http\Controllers;



use DB;
use App\Quotation;
use App\Listing;
use App\Image;
use Illuminate\Http\Request;
use Auth;
use View;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\RedirectResponse;
use Session;
use App\Sport;


class ManageListingsController extends Controller
{
    //only the authenticated user can get to this page
    public function __construct()
    {
        $this->middleware('auth');

    }

    //displays all the listings of the user
    public function index(){


        $sports = Sport::find('sport_id');
        $images = Image::find('listing_id');
        $listings = Listing::where('user_id', Auth::user()->id)->get();

        return view('managelistings.index', compact('listings', 'sports', 'images'));

    }

    //displays the form for creating new listing after submiting uses the store() method
    public function create(){

        $sports = Sport::get();
        return view('managelistings.create', compact( 'sports'));

    }

    //displays the selected listing by id with the template show.blade.php
    public function show($id){

        $listing = Listing::findOrFail($id);

        $images = Image::where('listing_id', $id)->get();


        return view('managelistings.show', compact('listing', 'images'));

    }

    //creates the gps longitude and latitude from the address that user inputs
    public function getGPS($address){

        $address = str_replace(" ", "+", $address); // replace all the white space with "+" sign to match with google search pattern
        $key = 'AIzaSyCRTxJsfGyvETY_3nLh8UVTLDo3Hf_qBWk';
        $url = "http://maps.google.com/maps/api/geocode/json?sensor=false?key=" . $key ."&address=" . $address ;

        $response = file_get_contents($url);

        $json = json_decode($response,TRUE); //generate array object from the response from the web
        $lat = $json['results'][0]['geometry']['location']['lat'];
        $lng = $json['results'][0]['geometry']['location']['lng'];
        $coords = array(
            'lat' => $lat,
            'lng' => $lng
        );
        return ($coords);
    }

    //creates the new listing in the databes with the user_id and redirects to all the listings this user has
    public function store(Request $request){
      

        $this->validate($request, [
            'sport' => 'required',
            'name' => 'required|max:255',
            'img' => 'required',
            'description' => 'required',
            'slug' => 'required',
            'street' => 'required',
            'house_nr' => 'required|integer',
            'city' => 'required',
            'postcode' => 'required|integer',
            'country' => 'required',
            'bus' => 'required',
            'tram' => 'required',
            'metro' => 'required',
            'monday' => 'required',
            'tuesday' => 'required',
            'wednesday' => 'required',
            'thursday' => 'required',
            'friday' => 'required',
            'saturday' => 'required',
            'sunday' => 'required',
            'price' => 'required',

            
        ]);
        $input = $request->all();
        $address = $input['street'].' '.$input['house_nr'].','.$input['city'].','.$input['postcode'].','.$input['country'];
        $gps = $this->getGPS($address);

        $input['gps_lat'] = $gps['lat'];
        $input['gps_long'] = $gps['lng'];

        $input['sport_id'] = 0;
        $input = array_diff_key($input, array('sport' => null));

        $sport_ids = array_keys($request->input('sport'));
        $listing = Listing::create($input);
        $listing->hasSports()->sync($sport_ids);
        
        Session::flash('flash_message', 'Listing was added successfully!');
        return redirect('managelistings');

    }

    public function edit($id){

        $sports = Sport::get();
        $listing = Listing::findOrFail($id);

        return view('managelistings.edit', compact('listing','sports'));

    }
    public function rules()
    {
        return [
            'name'        => 'required',
            'sku'         => 'required|unique:products,sku,' . $this->get('id'),
            'image'       => 'required|mimes:png'
        ];
    }
    public function update($id, Request $request){

        
        $listing = Listing::findOrFail($id);

        $this->validate($request, [
            'sport' => 'required',
            'name' => 'required|max:255',
            'img' => 'required',
            'description' => 'required',
            'slug' => 'required',
            'street' => 'required',
            'house_nr' => 'required|integer',
            'city' => 'required',
            'postcode' => 'required|integer',
            'country' => 'required',
            'bus' => 'required',
            'tram' => 'required',
            'metro' => 'required',
            'monday' => 'required',
            'tuesday' => 'required',
            'wednesday' => 'required',
            'thursday' => 'required',
            'friday' => 'required',
            'saturday' => 'required',
            'sunday' => 'required',
            'price' => 'required',
        ]);

        $input = $request->all();
        $address = $input['street'].' '.$input['house_nr'].','.$input['city'].','.$input['postcode'].','.$input['country'];
        $gps = $this->getGPS($address);

        $input['gps_lat'] = $gps['lat'];
        $input['gps_long'] = $gps['lng'];

        $input['sport_id'] = 0;

        $sport_ids = array_keys($request->input('sport'));
        $listing->hasSports()->sync($sport_ids);
        $listing->fill($input)->save();


        Session::flash('flash_message', 'Listing was successfully edited!');

        return redirect('managelistings');

    }


    //deletes the data from the listings table
    public function destroy($id)
    {
        $listing = Listing::findOrFail($id);

        $listing->delete();

        Session::flash('flash_message', 'Listing was successfully deleted!');

        return redirect()->route('managelistings.index');
    }

}
