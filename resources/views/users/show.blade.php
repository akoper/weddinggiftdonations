@extends('template')

@section('content')

    <table class="table table-bordered widthAuto ">
        <thead>
            <tr>
                <th class="col-md-2">Field</th>
                <th class="col-md-2">Value</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Hashtag</td>
                <td>{{ $user->hashtag}}</td>
            </tr>
            <tr>
                <td>Groom</td>
                <td>{{ $user->oneFName . ' ' . $user->oneLName}} </td>
            </tr>
            <tr>
                <td>Bride</td>
                <td>{{ $user->twoFName . ' ' . $user->twoLName}} </td>
            </tr>
            <tr>
                <td>Date</td>
                <td>{{ $user->date}}</td>
            </tr>
            <tr>
                <td>Account User ID </td>
                <td>{{ $user->email}}</td>
            </tr>
        </tbody>
    </table>

    <p>
        <a href="{{ url('nonprofit/search') }}" class="button icon">Pick nonprofit</a>
    </p>

    <p>
        <a href="{{ url('user/' . $user->id . '/edit') }}">Edit your couple's information</a>
    </p>

    <p>
        <a href="{{ url('user/' . $user->id . '/delete') }}">Delete your couple's account</a>
    </p>

@endsection