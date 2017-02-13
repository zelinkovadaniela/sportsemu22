@extends ('layouts.app')

@section('content')

    <div class="fullcontainer my-container2">



        <div class="managelisting-form">
            <h1 id="editlisting-h1">Edit "{{$listing->name}}"</h1>


            @include('partials.alerts.errors')



            {{ Form::model($listing, ['method' => 'PATCH', 'route'=> ['managelistings.update', $listing->id, 'class' => 'form',
            'novalidate' => 'novalidate',
            'files' => true]]) }}
            <div class="form-group">
                @foreach ($sports as $sport)
                <input type="checkbox" name="sport[{{$sport->id}}]" value="1" id="sport_checkbox_{{$sport->id }}">
                <label for="sport_checkbox_{{ $sport->id }}">{{ $sport->sport_name }}</label>
                @endforeach
                <!--{{Form::label('sport_id', 'Sport:')}}
                {{Form::select('sport_id',[
                    1 => 'Badminton',
                    2 => 'Tennis',
                    3 => 'Squash',
                    4 => 'Pilates',
                    5 => 'Swimming',
                    6 => 'Dance',
                    7 => 'Gym',
                    8 => 'Football',
                    ], ['class'=>'form-control'])}}-->
            </div>

            <div class="form-group">
                {{Form::label('name', 'Name:')}}
                {{Form::text('name', null, ['class'=>'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('slug', 'Altername (The name to display in the url):')}}
                {{Form::text('slug', null, ['class'=>'form-control'])}}
            </div>
             <div class="form-group">
                {{Form::label('img', 'Image:')}}
                {{Form::text('img', null, ['class'=>'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('street', 'Street:')}}
                {{Form::text('street', null, ['class'=>'form-control'])}}

            </div>
            <div class="form-group">
                {{Form::label('house_nr', 'House number:')}}
                {{Form::text('house_nr', null, ['class'=>'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('city', 'City:')}}
                {{Form::text('city', null, ['class'=>'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('postcode', 'Postcode:')}}
                {{Form::text('postcode', null, ['class'=>'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('country', 'Country:')}}
                {{Form::text('country', null, ['class'=>'form-control'])}}
            </div>
               <div class="form-group">
                {{Form::label('map', 'Map:')}}
                {{Form::text('map', null, ['class'=>'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('description', 'Description:')}}
                {{Form::textarea('description', null, ['class'=>'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('bus', 'Nearest Bus:')}}
                {{Form::text('bus', null, ['class'=>'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('tram', 'Nearest tram:')}}
                {{Form::text('tram', null, ['class'=>'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('metro', 'Nearest Metros:')}}
                {{Form::text('metro', null, ['class'=>'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('monday', 'Opening Time Monday:')}}
                {{Form::text('monday', null, ['class'=>'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('tuesday', 'Opening Time Tuesday:')}}
                {{Form::text('tuesday', null, ['class'=>'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('wednesday', 'Opening Time Wednesday:')}}
                {{Form::text('wednesday', null, ['class'=>'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('thursday', 'Opening Time Thursday:')}}
                {{Form::text('thursday', null, ['class'=>'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('friday', 'Opening Time friday:')}}
                {{Form::text('friday', null, ['class'=>'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('saturday', 'Opening Time Saturday:')}}
                {{Form::text('saturday', null, ['class'=>'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('sunday', 'Opening Time Sunday:')}}
                {{Form::text('sunday', null, ['class'=>'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::hidden('user_id', Auth::user()->id)}}
            </div>
            
            <div class="form-group">
                {{Form::submit('Update listing', ['class'=>'btn-primary form-control'])}}
            </div>
            {{ Form::close() }}
        </div>
    </div>

@stop