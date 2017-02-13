@extends('layouts.app')

@section('content')
<div class="fullcontainer login-bg">
    <div class="register-container">
        <div class="r-register">Register your account</div>
        <form role="form" method="POST" action="{{ url('/register') }}">
        {{ csrf_field() }}
        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

            <div class="col-md-6">

                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
                @if ($errors->has('username'))
                    <span class="help-block">
                        <strong>{{ $errors->first('username') }}</strong>
                    </span>
                @endif
                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="login-user"><i class="login-icon fa fa-user-o fa-lg" aria-hidden="true"></i><input id="username" type="username" class="login-fields" name="username" value="{{ old('username') }}" placeholder="Username" required autofocus></div>
        <div class="login-user"><i class="login-icon fa fa-envelope-o fa-lg" aria-hidden="true"></i><input id="email" type="email" class="login-fields" name="email" value="{{ old('email') }}" placeholder="Email" required autofocus></div>
        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
        <div class="login-user"><i class="login-icon fa fa-key fa-lg" aria-hidden="true"></i><input id="password" type="password" class="login-fields" name="password" placeholder="Password" required></div>
        <div class="login-user"><i class="login-icon fa fa-key fa-lg" aria-hidden="true"></i><input id="password_confirm" type="password" class="login-fields" name="password_confirmation" placeholder="Password" required></div>
        </div>
        <div class="button-wrap">
            <div class="login-button"><button class="login-btn-submit" value="Submit">Register</button></div>
        </div> 
        </form>
    </div>
</div>

@endsection
<!--<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>-->