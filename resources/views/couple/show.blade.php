@extends('template')

@section('content')

    <table class="table table-bordered widthAuto ">

        <tbody>
        <!--<tr>
            <td>Hashtag</td>
            <td>{{ $user->hashtag}}</td>
        </tr>-->
        <tr>
            <td>Groom</td>
            <td>{{ $user->oneFName . ' ' . $user->oneLName}} </td>
        </tr>
        <tr>
            <td>Bride</td>
            <td>{{ $user->twoFName . ' ' . $user->twoLName}} </td>
        </tr>
        </tbody>
    </table>



@endsection