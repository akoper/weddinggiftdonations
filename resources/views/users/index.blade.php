@extends('template')

@section('content')
    <!-- Create Task Form... -->

    <table class="table table-bordered widthAuto orgShowUser">
        <thead>
        <tr>
            <th class="col-md-2">Last Name</th>
            <th class="col-md-2">First Name</th>
            <th class="col-md-2">Title</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $key => $value)
            <tr>
                <td>{{ $value->lname ?: "&nbsp;" }}</td>
                <td>{{ $value->fname ?: "&nbsp;" }}</td>
                <td>{{ $value->title ?: "&nbsp;" }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>


@endsection