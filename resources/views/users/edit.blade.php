@extends('template')

@section('content')


    @if(Session::has('flash_message'))
        <div class="alert alert-danger">{!!Session::get('flash_message')!!}</div>
    @endif

    <!-- if there are any form field validation errors, they will show here -->
    @if($errors->any())
        <div class="alert alert-danger">{!! HTML::ul($errors->all()) !!}</div>
    @endif

    {{ Form::model($user, array('route' => array('user.update', $user->id), 'method'=>'PUT', 'class'=>'form-horizontal')) }}

        <!--<div class="form-group">
            {{ Form::label('hashtag', 'Wedding Social Media Hashtag', array('class' => 'col-sm-4 control-label')) }}
            <div class="col-sm-6">
            {{ Form::text('hashtag', null, array('class' => 'form-control')) }}
            </div>
        </div> -->

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
                    <i class="fa fa-plus"></i> Update</button>
            </div>
        </div>

    {{ Form::close() }}

    <p class="padTop25">
    * = Required field.
    </p>
    <p>
    Password has to be at least six characters
    </p>

@stop