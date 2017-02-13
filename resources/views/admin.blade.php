@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="col-md-10">
            <h3>Bookings</h3>
            @foreach ($bookings as $booking)
                <ul class="list-group">
                    <li class="list-group-item">
                        {{ $booking->email}} - {{ $booking->listing }}
                    </li>
                </ul>
            @endforeach
        </div>
    </div>

@endsection