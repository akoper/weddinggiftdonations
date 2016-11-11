@extends('template')

@section('content')

    <!-- Bootstrap Boilerplate... -->

    <div class="panel-body">

        @include('common.errors')

            <ul class="actions">
                <li><a href="{{ url('user/search') }}" class="button icon">Guests: find a couple's wedding</a></li>
            </ul>

            <ul class="actions">
                <li><a href="{{ url('register') }}" class="button icon">Couples getting married: create a donation registry</a></li>
            </ul>

    </div>

@stop