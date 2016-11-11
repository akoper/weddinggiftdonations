@extends('template')

@section('content')

    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
        {{ csrf_field() }}

        {{--<div class="form-group{{ $errors->has('hashtag') ? ' has-error' : '' }}">
            <label for="name" class="col-md-4 control-label">Wedding Social Media Hashtag</label>

            <div class="col-md-6">
                <input id="oneFName" type="text" class="form-control" name="oneFName" value="{{ old('oneFName') }}" required autofocus>

                @if ($errors->has('oneFName'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('oneFName') }}</strong>
                                    </span>
                @endif
            </div>
        </div>--}}

        <div class="form-group{{ $errors->has('oneFName') ? ' has-error' : '' }}">
            <label for="name" class="col-md-4 control-label">Groom First Name</label>

            <div class="col-md-6">
                <input id="oneFName" type="text" class="form-control" name="oneFName" value="{{ old('oneFName') }}" required autofocus>

                @if ($errors->has('oneFName'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('oneFName') }}</strong>
                                    </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('oneLName') ? ' has-error' : '' }}">
            <label for="name" class="col-md-4 control-label">Groom Last Name *</label>

            <div class="col-md-6">
                <input id="oneLName" type="text" class="form-control" name="oneLName" value="{{ old('oneLName') }}" required autofocus>

                @if ($errors->has('oneLName'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('oneLName') }}</strong>
                                    </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('twoFName') ? ' has-error' : '' }}">
            <label for="name" class="col-md-4 control-label">Bride First Name</label>

            <div class="col-md-6">
                <input id="twoFName" type="text" class="form-control" name="twoFName" value="{{ old('twoFName') }}" required autofocus>

                @if ($errors->has('twoFName'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('twoFName') }}</strong>
                                    </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('twoLName') ? ' has-error' : '' }}">
            <label for="name" class="col-md-4 control-label">Bride Last Name *</label>

            <div class="col-md-6">
                <input id="twoLName" type="text" class="form-control" name="twoLName" value="{{ old('twoLName') }}" required autofocus>

                @if ($errors->has('twoLName'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('twoLName') }}</strong>
                                    </span>
                @endif
            </div>
        </div>

        {{-- <div class="form-group{{ $errors->has('date') ? ' has-error' : '' }}">
            <label for="name" class="col-md-4 control-label">Date</label>

            <div class="col-md-6">
                <input id="oneFName" type="text" class="form-control" name="oneFName" value="{{ old('date') }}" required autofocus>

                @if ($errors->has('date'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('date') }}</strong>
                                    </span>
                @endif
            </div>
        </div> --}}

        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <label for="email" class="col-md-4 control-label">E-Mail Address/Account User ID</label>

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

        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

            <div class="col-md-6">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>

                @if ($errors->has('password_confirmation'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                @endif
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="btn button btn-default">
                    <i class="fa fa-plus"></i> Create</button>
            </div>
        </div>
    </form>

    <p class="padTop25">
    * = Required field.
    </p>
    <p>
        Password has to be at least six characters
    </p>

@endsection
