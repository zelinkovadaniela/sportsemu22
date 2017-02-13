@extends ('layouts.app')


@section('content')

    <div class="text-content">
        <div class="span7 offset1">


            {!! Form::open(['route'=> ['imageupload.upload', $listing->id],'method'=>'POST', 'files'=>true]) !!}
            <div class="control-group">
                <div class="controls">

                    {{--{!! Form::file('images[]', array('multiple'=>true, 'id'=>'file','class'=>'inputfile')) !!}--}}
                    <input type="file" name="file[]" id="file" class="inputfile" data-multiple-caption="{count} files selected" multiple />
                    <label class="h-s-bg md-whiteframe-3dp" for="file"><strong>Choose files</strong></label>
                    <p class="errors">{!!$errors->first('file')!!}</p>
                    @if(Session::has('error'))
                        <p class="errors">{!! Session::get('error') !!}</p>
                    @endif
                </div>
            </div>
            {!! Form::submit('Submit', array('class'=>'send-btn h-s-bg md-whiteframe-3dp')) !!}
            {!! Form::close() !!}
        </div>
    </div>

@stop
    {{--<div class="text-center">--}}
        {{--<h1>{{ $listing->name }}</h1>--}}

        {{--<div class="row">--}}
            {{--{{ Form::open(['method' => 'POST', 'route'=> ['imageupload.upload', $listing->id], 'id' => 'form',--}}
            {{--'novalidate' => 'novalidate',--}}
            {{--'files' => true]) }}--}}
            {{--<div class="form-group text-left col-md-offset-5 ">--}}
                {{--{{Form::label('image', 'Images:')}}--}}
                {{--{{Form::file('image[]', ['multiple' => 'multiple'])}}--}}
            {{--</div>--}}

            {{--<div class="form-group">--}}

                {{--{{Form::submit('Update listing', ['class'=>'btn-primary form-control'])}}--}}

            {{--</div>--}}
            {{--{{Form::close()}}--}}


        {{--</div>--}}

        {{--<div class="row">--}}

            {{--<a href="{{ route('managelistings.show', $listing->id) }}" class="btn btn-primary">Back to detail</a>--}}
            {{--<a href="{{ route('managelistings.edit', $listing->id) }}" class="btn btn-primary">Edit listing</a>--}}

        {{--</div>--}}

    {{--</div>--}}

<script src="/js/form/jquery-v1.min.js"></script>
<script src="/js/form/custom-file-input.js"></script>

<script src="/js/form/jquery.custom-file-input.js"></script>
{{--<script>--}}
    {{--var form = document.getElementById('form');--}}
    {{--var request = new XMLHttpRequest();--}}

    {{--form.addEventListener('submit', function(e){--}}
        {{--e.preventDefault();--}}

        {{--var formData = new FormData(form);--}}

        {{--request.open('post', '/imageupload');--}}
        {{--request.addEventListener("load", transferComplete);--}}
        {{--request.send(formData);--}}
    {{--});--}}

    {{--function transferComplete(data){--}}
        {{--console.log(data.currentTarget.response)--}}
    {{--}--}}
{{--</script>--}}

