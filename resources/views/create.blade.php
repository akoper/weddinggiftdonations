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

    <form method="POST" action="/users">
        {{ csrf_field() }}

    <div class="form-group responsive200">
        {!! Form::label('email', 'Email Address (User ID)*') !!}
        {!! Form::email('email', Input::old('email'), array('class' => 'form-control')) !!}
    </div>

    <div class="form-group responsive200">
        {!! Form::label('password', 'Password *') !!}
        {!! Form::password('password', array('class'=>'form-control' ) ) !!}
    </div>

    <div class="form-group responsive200">
        {!! Form::label('password_confirmation', 'Password Retype *') !!}
        {!! Form::password('password_confirmation', array('class' => 'form-control')) !!}
    </div>

    <div class="form-group responsive200">
        {!! Form::label('fname', 'First Name') !!}
        {!! Form::text('fname', Input::old('fname'), array('class' => 'form-control')) !!}
    </div>

    <div class="form-group responsive200">
        {!! Form::label('lname', 'Last Name') !!}
        {!! Form::text('lname', Input::old('lname'), array('class' => 'form-control')) !!}
    </div>

    {!! Form::submit('Create', array('class' => 'btn btn-primary marginBot15')) !!}

    </form>

    <p>
        * = Required field.  Password has to be between 6 and 20 characters.
    </p>

@stop