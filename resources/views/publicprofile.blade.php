@extends('layouts.app')

@section('pagetitle')
    Members
@endsection

@section('content')
<h1>Member Profile of</h1>
<ul>
<li>{{ $user->username }}</li>
        <p>temp layout</p>
</ul>
 
@endsection