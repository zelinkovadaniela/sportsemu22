@extends('layouts.app')

@section('content')


<div class="fullcontainer" ng-controller="listingsController">
    <div class="grid">
        <div class="cell">
            <div class="grid grid--gutters grid--full gridsm--full gridmd--full gridlg--1of2 gridxl--1of2">

                <div class="cell" ng-repeat="listing in listings">
					<a href="/listings/@{{listing.slug}}">
                    <img src="/img/listings/@{{listing.img}}.jpg" ng-mouseover="hover()" class="img-full">
                    <div class="md-whiteframe-1dp">
                        <div class="l-name"><h2> @{{ listing.name }}</h2></a></div>
                        <div class="l-desc">@{{ listing.description }}</div>
                        <div class="l-sports-title-wrap">
                            <div class="l-sports-title">
                            Available Sports <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>

                            </div>
                        </div>
                        <div class="l-sports">
                            {{-- @foreach($listing->hasSports as $hassport)
                                <img src="img/listings/{{ $hassport->sport_name }}.png" alt=" {{ $hassport->sport_name }}">
                            @endforeach --}}
                        </div>
                        <div class="l-near-wrap">
                            <div class="l-near">
                              <i class="fa fa-train" aria-hidden="true"></i>
 Nearest Tram:@{{ $listing.tram }}
                            <i class="fa fa-bus" aria-hidden="true"></i>
Nearest Bus:@{{ $listing.bus }}
                            <i class="fa fa-subway" aria-hidden="true"></i>Nearest Metro: @{{ listing.metro }}
                            </div>
                        </div>
                    </div>
				</a>
                </div>

            </div>
        </div>


        <div class="cell l-cell-map">
            <div id="l-map">
            @include('partials.listingsmap')
            </div>
        </div>
    </div>
</div>


@endsection