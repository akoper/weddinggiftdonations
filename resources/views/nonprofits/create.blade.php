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

    <form method="POST" action="users" class="form-horizontal">

        {{ csrf_field() }}

        <div class="form-group">
            <label for="task" class="col-sm-3 control-label">Nonprofit</label>

            <div class="col-sm-6">
                <input type="text" name="name" id="task" class="form-control">
            </div>
        </div>

        <div class="form-group">
            <label for="task" class="col-sm-3 control-label">Mission</label>

            <div class="col-sm-6">
                <input type="text" name="name" id="task" class="form-control">
            </div>
        </div>

        <div class="form-group">
            <label for="task" class="col-sm-3 control-label">URL</label>

            <div class="col-sm-6">
                <input type="text" name="name" id="task" class="form-control">
            </div>
        </div>

        <div class="form-group">
            <label for="task" class="col-sm-3 control-label">Payment Method URL</label>

            <div class="col-sm-6">
                <input type="text" name="name" id="task" class="form-control">
            </div>
        </div>

        <!-- Add Task Button -->
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-6">
                <button type="submit" class="btn btn-default">
                    <i class="fa fa-plus"></i> Create
            </div>
        </div>

    </form>

    <p>
        * = Required field.  Password has to be between 6 and 20 characters.
    </p>

@stop