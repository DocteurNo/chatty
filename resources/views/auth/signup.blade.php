@extends('templates.default')

@section('content')
    <div class="row">
        <div class="col-lg-6">
            <form action="{{ route('auth.signup') }}" method="post" class="form-vertical">
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email" class="form-label">Your email address</label>
                    <input type="text" name="email" id="email" class="form-control"
                           value="{{ Request::old('email') ?: '' }}">
                    @if($errors->has('email'))
                        <span class="help-block">{{ $errors->first('email') }}</span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                    <label for="username" class="form-label">Choose your username</label>
                    <input type="text" name="username" id="username" class="form-control"
                           value="{{ Request::old('username') ?: '' }}">
                    @if($errors->has('username'))
                        <span class="help-block">{{ $errors->first('username') }}</span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password" class="form-label">Choose your password</label>
                    <input type="password" name="password" id="password" class="form-control"
                           value="{{ Request::old('password') ?: '' }}">
                    @if($errors->has('password'))
                        <span class="help-block">{{ $errors->first('username') }}</span>
                    @endif
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-default">Sign up</button>
                </div>
                <input type="hidden" name="_token" value="{{ Session::token() }}">
            </form>
        </div>
    </div>
@stop