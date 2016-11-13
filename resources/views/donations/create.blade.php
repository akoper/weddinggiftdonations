@extends('template')

@section('content')

    <form class="typeahead" role="search">
        <div class="form-group">
            <input type="search" name="q" class="form-control" placeholder="Search" autocomplete="off">
        </div>
    </form>

    <hr style="margin-top: 100px;">

    <form class="form-horizontal" role="form" method="POST" action="{{ url('donation') }}">
        {{ csrf_field() }}

        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <label for="name" class="col-md-4 control-label">Amount</label>

            <div class="col-md-6">
                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                @if ($errors->has('name'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                @endif
            </div>
        </div>

        {{-- <div class="form-group{{ $errors->has('webSite') ? ' has-error' : '' }}">
            <label for="name" class="col-md-4 control-label">webSite</label>

            <div class="col-md-6">
                <input id="webSite" type="text" class="form-control" name="webSite" value="{{ old('webSite') }}" required autofocus>

                @if ($errors->has('webSite'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('webSite') }}</strong>
                                    </span>
                @endif
            </div>
        </div> --}}

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
