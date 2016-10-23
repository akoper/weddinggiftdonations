@extends('template')

@section('content')

    <!-- Bootstrap Boilerplate... -->

    <div class="panel-body">

        <!--
        <form action="{{ url('task') }}" method="POST" class="form-horizontal">

        {{ csrf_field() }}

            <div class="form-group">
                <label for="task" class="col-sm-3 control-label">Task</label>

                <div class="col-sm-6">
                    <input type="text" name="name" id="task-name" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">Guests: search for a wedding</button>
                </div>
            </div>

        </form> -->

            <ul class="actions">
                <li><a href="{{ url('users/search') }}" class="button icon">Guests: find a couple's wedding</a></li>
            </ul>

            <ul class="actions">
                <li><a href="{{ url('users/create') }}" class="button icon">Couples getting married: create a donation registry</a></li>
            </ul>

    </div>

@stop