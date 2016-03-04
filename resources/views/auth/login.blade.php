@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="column medium-8 medium-offset-2 ">
            <div class="panel panel-default">
                <h3>Login</h3   >
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {!! csrf_field() !!}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label>E-Mail Address
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                            
                                @if ($errors->has('email'))
                                    <div class="callout alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </div>
                                @endif
                            </label>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label>Password
                                <input type="password" class="form-control" name="password">
                            
                                @if ($errors->has('password'))
                                    <div class="callout alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </div>
                                @endif
                            </label>
                        </div>

                        <div class="form-group">
                            <label>
                                <input type="checkbox" name="remember"> Remember Me
                            </label>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="button">
                                    <i class="fa fa-btn fa-sign-in"></i> Login
                                </button>

                                <a class="secondary button" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
