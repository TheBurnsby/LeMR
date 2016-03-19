@extends('layouts.app')

@section('content')
<div class="login-wrapper">
    <div class="row">
        <div class="login-container">
            <div class="panel panel-default">
                <h3>Welcome to LeMR!    </h3>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {!! csrf_field() !!}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label class="">E-Mail Address *
                                @if ($errors->has('email'))
                                    <span class="alert label" style="float:right">
                                        {{ $errors->first('email') }}
                                    </span>
                                @endif
                            </label>

                            <div>
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label class="">Password *
                                @if ($errors->has('password'))
                                    <span class="alert label" style="float:right">
                                        {{ $errors->first('password') }}
                                    </span>
                                @endif
                            </label>

                            <div class="">
                                <input type="password" class="form-control" name="password">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="">
                                <button type="submit" class="button">
                                    <i class="fa fa-btn fa-sign-in"></i> Login
                                </button>

                                <a class="button" href="{{ url('/password/reset') }}">Forgot Your Password?</a>

                                <a class="button" href="{{ url('/register') }}">Register</a>

                                <span class="branding">Agape Hospice, Tucson, AZ</span>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
