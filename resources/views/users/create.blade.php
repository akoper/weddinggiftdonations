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

    <form method="POST" action="{{ url('user') }}" class="form-horizontal">

        {{ csrf_field() }}

        <div class="form-group">
            <label for="hashtag" class="col-sm-4 control-label">Wedding Social Media Hashtag</label>

            <div class="col-sm-6">
                <input type="text" name="hashtag" id="hashtag" class="form-control">
            </div>
        </div>

        <div class="form-group">
            <label for="oneFName" class="col-sm-4 control-label">First Name</label>

            <div class="col-sm-6">
                <input type="text" name="oneFName" id="oneFName" class="form-control">
            </div>
        </div>

        <div class="form-group">
            <label for="oneLName" class="col-sm-4 control-label">Last Name *</label>

            <div class="col-sm-6">
                <input type="text" name="oneLName" id="oneLName" class="form-control">
            </div>
        </div>

        <div class="form-group">
            <label for="twoFName" class="col-sm-4 control-label">First Name</label>

            <div class="col-sm-6">
                <input type="text" name="twoFName" id="twoFName" class="form-control">
            </div>
        </div>

        <div class="form-group">
            <label for="twoLName" class="col-sm-4 control-label">Last Name *</label>

            <div class="col-sm-6">
                <input type="text" name="twoLName" id="twoLName" class="form-control">
            </div>
        </div>

        <div class="form-group">
            <label for="date" class="col-sm-4 control-label">Wedding Date xx/xx/xxxx</label>

            <div class="col-sm-6">
                <input type="text" name="date" id="date" class="form-control">
            </div>
        </div>

        <div class="form-group">
            <label for="email" class="col-sm-4 control-label">User ID (email address) *</label>

            <div class="col-sm-6">
                <input type="text" name="email" id="email" class="form-control">
            </div>
        </div>

        <div class="form-group">
            <label for="password" class="col-sm-4 control-label">Password *</label>

            <div class="col-sm-6">
                <input type="text" name="password" id="password" class="form-control">
            </div>
        </div>


        <!-- Add Task Button -->
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-6">
                <button type="submit" class="btn button btn-default">
                    <i class="fa fa-plus"></i> Create</button>
            </div>
        </div>

    </form>

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