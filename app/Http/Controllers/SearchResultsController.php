<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Availability;
use App\Listing;
use App\Quotation;
use View;
use Auth;
use Image;
use Validator;
use Session;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\RedirectResponse;

class SearchResultsController extends Controller
{
    

    // I have created 2 models listing.php and availability.php and that tells laravel which table to use and then create a function 'availablelistings' to create a relationship between the managelistings and
    // availability table

    public function index() {
    $listings = Listing::with('images','hasSports')->orderBy('slug')->get();
    return View::make('pages.listings')->with('listings', $listings);

        $json_geolocation = array();
        foreach($listings as $listing) {
            $json_geolocation[] = array(
                'lat'=> $listing['gps_lat'],
                'lng'=> $listing['gps_long']
            );
        }
    return View::make('pages.listings')->with(array('listings'=> $listings,
                                                    'json_geolocation'=>$json_geolocation));


    }



    // Show by slug (this is the same as showing by id excect using a slug so the url is seo friendly)

    public function search()
    {
        $category = Input::get('category', 'default category');
        $term = Input::get('term', false);

        // do things with them...
        return View::make('pages.listings')->with('category', $category);
    }

    
    public function showBySlug($slug) {
    $listings = Listing::with('images')->where('slug',$slug)->orderBy('slug')->get();
    return View::make('pages.listings-slug')->with('listings', $listings);


    }




}

