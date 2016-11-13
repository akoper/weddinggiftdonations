@extends('template')

@section('content')

    <table class="table table-bordered widthAuto ">
        <thead>
        <tr>
            <th class="col-md-2">Name</th>
            <th class="col-md-2">Mission</th>
            <th class="col-md-2">webSite</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($nonprofits as $nonprofit)

            <tr>
                <td>{{ $nonprofit->name }} </td>
                <td>{{ $nonprofit->mission }} </td>
                <td>{{ $nonprofit->webSite }} </td>
            </tr>

        @endforeach
        </tbody>
    </table>

@endsection