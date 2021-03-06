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

    <form class="typeahead" role="search">
        <div class="form-group">
            <input type="search" name="q" class="form-control" placeholder="Search" autocomplete="off">
        </div>
    </form>

    <hr style="margin-top: 100px;">

    <form method="POST" action="users" class="form-horizontal">

        {{ csrf_field() }}

        <div class="form-group">
            <label for="task" class="col-sm-3 control-label">Wedding Hashtag</label>

            <div class="col-sm-6">
                <input type="text" name="name" id="task" class="form-control">
            </div>
        </div>

        <div class="form-group">
            <label for="task" class="col-sm-3 control-label">Last Name</label>

            <div class="col-sm-6">
                <input type="text" name="name" id="task" class="form-control">
            </div>
        </div>
        
        <!-- Add Task Button -->
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-6">
                <button type="submit" class="btn button btn-default">
                    <i class="fa"></i> Search
            </div>
        </div>

    </form>


@stop