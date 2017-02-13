@extends ('layouts.app')


@section('content')

    <div class="fullcontainer my-container">
        <div class="listing2">
            <div class="listing3 h-s-bg md-whiteframe-3dp">
                <h2 id="managelistings-h2">{{$listing->name}}</h2>
                <br/>
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
                    <br/>
                    <br/>
                    @foreach ($images as $image)
                      <img class="listing-image" src="/{{$image->path}}" alt="images_of_this_listing"/>
                    @endforeach
                </p>
                <hr>

                <div class="row">
                    <a href="{{ route('managelistings.index') }}" class="btn btn-primary h-s-bg md-whiteframe-3dp">Back to all listings</a>
                    <a href="{{ route('managelistings.edit', $listing->id) }}" class="btn btn-primary h-s-bg md-whiteframe-3dp">Edit listing</a>
                    <a href="{{ route('imageupload.edit', $listing->id) }}" class="btn btn-primary h-s-bg md-whiteframe-3dp">Upload images</a>


                    {{ Form::open([
                            'method' => 'DELETE',
                            'route' => ['managelistings.destroy', $listing->id]
                      ]) }}
                    {{ Form::submit('Delete this listing?', ['class' => 'btn btn-danger h-s-bg md-whiteframe-3dp']) }}
                    {{ Form::close() }}

                </div>
            </div>
        </div>
    </div>
@stop