@extends('template')

@section('content')

    <form class="typeahead" role="search">
        <div class="form-group">
            <input type="search" name="q" class="form-control" placeholder="Search" autocomplete="off">
        </div>
    </form>

    <hr style="margin-top: 100px;">

    <form class="form-horizontal" role="form" method="POST" action="{{ url('nonprofit') }}">
        {{ csrf_field() }}

        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <label for="name" class="col-md-4 control-label">Name *</label>

            <div class="col-md-6">
                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                @if ($errors->has('name'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('mission') ? ' has-error' : '' }}">
            <label for="name" class="col-md-4 control-label">Mission</label>

            <div class="col-md-6">
                <input id="mission" type="text" class="form-control" name="mission" value="{{ old('mission') }}" required autofocus>

                @if ($errors->has('mission'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('mission') }}</strong>
                                    </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('webSite') ? ' has-error' : '' }}">
            <label for="name" class="col-md-4 control-label">Web Site URL</label>

            <div class="col-md-6">
                <input id="webSite" type="text" class="form-control" name="webSite" value="{{ old('webSite') }}" required autofocus>

                @if ($errors->has('webSite'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('webSite') }}</strong>
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

@endsection
