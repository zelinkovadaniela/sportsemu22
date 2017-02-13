<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class CheckoutController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('checkout.index', compact('user'));
    }
    public function pay()
    {
        $user = Auth::user();
        return view('checkout.payment', compact('user'));
    }
}
