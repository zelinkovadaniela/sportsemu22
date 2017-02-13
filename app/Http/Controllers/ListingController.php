<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListingController extends Controller
{
    /**
     * Show the index page.
     *
     * @var App\Listing $listings
     * @return Illuminate\View\View
     */
    public function charge()
    {
        $listings = \App\Listing::all();
        return view('charge', compact('listings'));
    }
}
