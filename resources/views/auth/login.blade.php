@extends('layouts.app')

@section('content')
<div class="fullcontainer login-bg">
    <div class="login-container md-whiteframe-6dp">
        <div class="login-login">Login to your account</div>
        <div class="login-with">
            <button class="loginBtn loginBtn--facebook">
            Login with Facebook
            </button>
        </div>
        <div class="login-with">
            <button class="loginBtn loginBtn--google">
            Login with Google
            </button>
        </div>
        <div class="login-or"><h6><span>or</span></h6></div>
        <form role="form" method="POST" action="{{ url('/login') }}">
        {{ csrf_field() }}
        <div class="login-user"><i class="login-icon fa fa-user-o fa-lg" aria-hidden="true"></i><input id="username" type="username" class="login-fields" name="username" value="{{ old('username') }}" placeholder="Username" required autofocus></div>
        <div class="login-user"><i class="login-icon fa fa-key fa-lg" aria-hidden="true"></i><input id="password" type="password" class="login-fields" name="password" placeholder="Password" required></div>
        <div class="button-wrap">
            <div class="login-button"><button class="login-btn-submit" value="Submit">Submit</button></div>
            <div class="forgot-password"> 
                <div><a href="{{ url('/password/reset') }}">
                Forgot Your Password?
                </a></div>
            </div>
        </div> 
        </form>
    </div>
</div>    
@endsection
  <!--<div class="panel-heading">Login</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

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
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ url('/password/reset') }}">
                                    Forgot Your Password?
                                </a>-->
