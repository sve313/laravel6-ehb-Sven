@extends('layouts.app')

@section('pagetitle')
    Members
@endsection

@section('content')
<table class="table table-hover">

<thead>

  <th>Username</th>

</thead>

<tbody>
@foreach($users as $user)

    <tr>

    <td><a href="{!! url('members/'.$user->username) !!}">{{$user->username}}</a> </td>

     
</a>

    </tr>
@endforeach

</tbody>

</table>
 
@endsection