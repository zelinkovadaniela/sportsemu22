<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Booking;
use App\Http\Requests;
use DB;
use App\Quotation;
use App\Listing;
use App\Image;
use View;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\RedirectResponse;
use Session;
use App\Sport;

class BookingController extends Controller
{


    public function index()
    {
        $listings = Listing::all();
        return view('booking.index', compact('listings'));
//        return view('booking/list', ['bookings' => Booking::orderBy('start_time')->get()]);
    }

//    public function create()
//    {
//        return view('booking/create');
//    }

    public function store(Request $request)
    {
//        $time = explode(" - ", $request->input('time'));
//
//        $booking = new Booking;
//        $booking->name = $request->input('name');
//        $booking->title = $request->input('title');
//        $booking->time = $time[0];
//        $booking->save();

        $request->session()->flash('success', 'The booking was successfully saved!');
        return view('booking.store');
    }

    public function show($id)
    {
        return view('booking/view', ['booking' => Booking::findOrFail($id)]);
    }

    public function edit($id)
    {
        return view('booking/edit', ['booking' => Event::findOrFail($id)]);
    }

    public function update(Request $request, $id)
    {
        $time = explode(" - ", $request->input('time'));

        $booking = Event::findOrFail($id);
        $booking->name = $request->input('name');
        $booking->title = $request->input('title');
        $booking->start_time = $time[0];
        $booking->end_time = $time[1];
        $booking->save();

        return redirect('booking');
    }

    public function destroy($id)
    {
        $booking = Booking::find($id);
        $booking->delete();

        return redirect('booking');
    }



}
