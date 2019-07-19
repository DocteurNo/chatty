@extends('templates.default')

@section('content')
    <div class="row">
        <div class="col-lg-6">
            <h3>Sign in</h3>
            <form action="{{ route('auth.signin') }}" method="post" class="form-vertical">
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" name="email" id="email" class="form-control"
                           value="{{ Request::old('email') ?: '' }}">
                    @if($errors->has('email'))
                        <span class="help-block">{{ $errors->first('email') }}</span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" id="password" class="form-control"
                           value="{{ Request::old('password') ?: '' }}">
                    @if($errors->has('password'))
                        <span class="help-block">{{ $errors->first('password') }}</span>
                    @endif
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="remember" id="remember"> Remember me
                    </label>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-default">Sign in</button>
                </div>
                <input type="hidden" name="_token" value="{{ Session::token() }}">
            </form>
        </div>
    </div>
@stop