@extends ('layouts.app')


@section('content')

<div class="fullcontainer my-container ">

    <h1 id="managelistings-h1">Manage Your Listings</h1>
    <br/>
    <!--redirecting to the page, where you can create a new listing-->
    <a href="{{ route('managelistings.create') }}">
        <div class="h-s-bg md-whiteframe-3dp managelistings-des">
            <h3>Create a new listing</h3>
            <br/>
            <p>If you do not have any listings created yet go ahead and create one so people can visit your great sport place</p>
            {{--<h3>NOW</h3>--}}

        </div>
    </a>

    {{--<a href="#">--}}
        {{--<div class="h-s-bg md-whiteframe-3dp managelistings-des1">--}}
            {{--<h3>Display your listings on map</h3>--}}
            {{--<br/>--}}
            {{--<p>Display your listings on the map by clicking here</p>--}}
        {{--</div>--}}
    {{--</a>--}}

    <div id="managelistings">


        @if(Session::has('success'))
            <div class="alert-box success">
                <h2>{!! Session::get('success') !!}</h2>
            </div>
        @endif

            <!--for each listing that exists in the database for this user display it on this page-->
            @foreach ($listings as $listing)


                <div class="listings">

                    <a href="{{ route('managelistings.show', $listing->id) }}">
                        <div class="listing1 h-s-bg md-whiteframe-3dp">
                            <h2 id="managelistings-h2">{{$listing->name}}</h2>
                            <div class="body">
                               <p id="managelistings-p">{{$listing->description}}</p> <br/>
                                {{$listing->street}}
                                {{$listing->house_nr}},<br/>
                                {{$listing->city}},<br/>
                                {{$listing->postcode}}
                                {{$listing->country}}<br/>
                                GPS:
                                {{$listing->gps_lat}};
                                {{$listing->gps_long}}
                                @if ($images)
                                @foreach($images as $image)
                                    <img class="index-images" src="/{{$image->path}}" alt="images_of_this_listing"/>
                                    @endforeach
                                    @endif

                            </div><!--body-->
                        </div>
                    </a>
                </div><!--listing-->
             @endforeach






    </div><!--container-fluid-->

</div>
@stop
