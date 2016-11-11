@extends('template')

@section('content')

    <!-- If session is set, it's because visitor/user id = 1 and tried to post/add data, and filter caught and redirectd them here. -->
    <!-- Show flash message that they have to create a user account to use features of application -->
    @if(Session::has('flash_message'))
        <div class="alert alert-danger">{!!Session::get('flash_message')!!}</div>
    @endif

    <!-- if there are any form field validation errors, they will show here -->
    @if($errors->any())
        <div class="alert alert-danger">{!! HTML::ul($errors->all()) !!}</div>
    @endif

    {!! Form::open(['url' => 'user', 'class'=>'form-horizontal']) !!}

    <div class="form-group">
        {{ Form::label('hashtag', 'Wedding Social Media Hashtag', array('class' => 'col-sm-4 control-label')) }}
        <div class="col-sm-6">
            {{ Form::text('hashtag', null, array('class' => 'form-control')) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('oneFName', 'First person, first name', array('class' => 'col-sm-4 control-label')) }}
        <div class="col-sm-6">
            {{ Form::text('oneFName', null, array('class' => 'form-control')) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('oneLName', 'First person, last name', array('class' => 'col-sm-4 control-label')) }}
        <div class="col-sm-6">
            {{ Form::text('oneLName', null, array('class' => 'form-control')) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('twoFName', 'Second person, first name', array('class' => 'col-sm-4 control-label')) }}
        <div class="col-sm-6">
            {{ Form::text('twoFName', null, array('class' => 'form-control')) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('twoLName', 'Second person, last name', array('class' => 'col-sm-4 control-label')) }}
        <div class="col-sm-6">
            {{ Form::text('twoLName', null, array('class' => 'form-control')) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('date', 'Date', array('class' => 'col-sm-4 control-label')) }}
        <div class="col-sm-6">
            {{ Form::text('date', null, array('class' => 'form-control')) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('email', 'User ID (email address) *', array('class' => 'col-sm-4 control-label')) }}
        <div class="col-sm-6">
            {{ Form::text('email', null, array('class' => 'form-control')) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('password', 'Password', array('class' => 'col-sm-4 control-label')) }}
        <div class="col-sm-6">
            {{ Form::text('password', null, array('class' => 'form-control')) }}
        </div>
    </div>

    <!-- Add Task Button -->
    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-6">
            <button type="submit" class="btn button btn-default">
                <i class="fa fa-plus"></i> Create</button>
        </div>
    </div>

    {{ Form::close() }}

    <p class="padTop25">
    Every couple's wedding will have a unique URL that they can send guests.  This will be formed from weddinggiftdonations.com plus either
    the couple's unique wedding social media hashtag or the couple's last names together.
    </p>
    * = Required field.
    </p>
    <p>
    Password has to be between 6 and 20 characters.
    </p>

@stop