@extends ('layouts.app')

@section('content')

    <h2 class="text-center">Payment succesfully made</h2>

    <a href="{{ url('/') }}" style="margin-top: 50px; margin-left: 50%; transform: translateX(-50%);z-index: 100; display: initial; width: 300px" class="btn btn-primary h-s-bg md-whiteframe-3dp">Go back to homepage</a>

@stop