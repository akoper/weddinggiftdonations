@extends('template')

@section('content')

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('hashtag') ? ' has-error' : '' }}">
                            {{ Form::label('hashtag', 'Wedding Social Media Hashtag', array('class' => 'col-sm-4 control-label')) }}
                            <div class="col-sm-6">
                                {{ Form::text('hashtag', null, array('class' => 'form-control')) }}

                                @if ($errors->has('hashtag'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('hashtag') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            {{ Form::label('oneFName', 'Groom, first name', array('class' => 'col-sm-4 control-label')) }}
                            <div class="col-sm-6">
                                {{ Form::text('oneFName', null, array('class' => 'form-control')) }}

                                @if ($errors->has('oneFName'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('oneFName') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('oneFName') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">oneFName</label>

                            <div class="col-md-6">
                                <input id="oneFName" type="text" class="form-control" name="oneFName" value="{{ old('oneFName') }}" required autofocus>

                                @if ($errors->has('oneFName'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('oneFName') }}</strong>
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
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>

@endsection
