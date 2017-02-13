@extends('layouts.app')

@section('content')



@foreach($listings as $listing)
<div class="fullcontainer-listings" style="background-image: url('../img/listings/big/{{ $listing->img }}.jpg');">
    <a href="{{ route('booking.index') }}" style="z-index: 100; display: initial" class="btn btn-primary h-s-bg md-whiteframe-3dp">BOOK NOW</a>

</div>
<div class="fullcontainer">
    <div class="contain">
        <div class="grid grid--gutters grid--full gridsm--full gridmd--1of2 gridlg--1of2 gridxl--1of2">
            <!--Left Column-->
            <div class="cell u-med-2of3 u-large-2of3 u-xl-2of3">
                <div class="l-wrap md-whiteframe-1dp">
                    <div class="l-header md-whiteframe-3dp">{{ $listing->name }}</div>
                    <div class="l-bg">{{ $listing->description }}</div>
                </div>
                <div class="l-wrap md-whiteframe-1dp">
                        <div class="l-header md-whiteframe-3dp">Facilities</div>
                        <div class="l-bg">
                            @foreach($listing->hasSports as $hassport)
                                <img src="../img/listings/icons/{{ $hassport->sport_name }}.png" alt=" {{ $hassport->sport_name }}">
                            @endforeach
                        </div>
                </div>
                <div class="l-wrap-no-m md-whiteframe-1dp">
                    <div class="l-header md-whiteframe-3dp">How to get here</div>
                    <div class="l-bg">Nearest metro stop:{{ $listing->metro }}</div>
                    <div class="l-bg">Nearest Tram stop:{{ $listing->tram }}</div>
                    <div class="l-bg">Nearest Tram stop:{{ $listing->bus }}</div>
                </div>
            </div>
            <!--Right column-->
            <div class="cell u-med-1of3 u-large-1of3 u-xl-1of3">
                <div class="l-wrap md-whiteframe-1dp">
                    <div class="l-header md-whiteframe-3dp">Location</div>
                    <div class="l-map">
                        <iframe src="{{ $listing->map }}" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="l-wrap-no-m md-whiteframe-1dp">
                    <div class="l-header md-whiteframe-3dp">Opening Times</div>
                    <div class="l-open-row">Monday: <span class="l-time">{{ $listing->monday }}</span></div>
                    <div class="l-open-row">Tuesday:<span class="l-time">{{ $listing->monday }}</span></div>
                    <div class="l-open-row">Wednesday:<span class="l-time">{{ $listing->monday }}</span></div>
                    <div class="l-open-row">Thursday:<span class="l-time">{{ $listing->monday }}</span></div>
                    <div class="l-open-row">Friday:<span class="l-time">{{ $listing->monday }}</span></div>
                    <div class="l-open-row">Saturday:<span class="l-time">{{ $listing->monday }}</span></div>
                    <div class="l-open-row">Sunday:<span class="l-time">{{ $listing->monday }}</span></div>
                </div>
            </div>
      
        
            <div class="l-wrap-single md-whiteframe-1dp">
                <div class="l-header md-whiteframe-3dp">Images</div>
                    <div class="grid grid--gutters grid--full gridsm--full gridmd--full gridlg--1of4 gridxl--1of4">
                        @foreach($listing->images as $image)
                        <div class="cell">
                            <img src="/{{ $image->path}}" class="img-full">
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
                                {{--<th ng-repeat="court in courts" class="slot">--}}
        
            <div class="l-wrap-single md-whiteframe-1dp">
                <div class="l-header md-whiteframe-3dp">Court Availability</div>
                    <div class="grid grid--full gridsm--full gridmd--full gridlg--full gridxl--full">
                        <div class="cell">
                            <table class="l-b-table" ng-controller="bookingController">
                                <thead>
                                    <tr class="l-b-tr">
                                        <th class="l-b-th">Court/Hour</th>
                                        <th ng-repeat="court in courts">
                                            <span class="label label-default">
                                                @{{court.name}}
                                            </span>
                                        </th>
                                    </tr>
                                </thead>
                                <tr ng-repeat="hour in hours">
                                    <th class="l-b-th">@{{hour.hour}}</th>
                                    <th ng-repeat="court in courts" class="slot">
                                    <a href="#" class="slot-link">Slot</a>
                                    </th>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
            <!--Booking Grid-->
        
            

    </div>
</div> 

@endsection