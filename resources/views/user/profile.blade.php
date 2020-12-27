@extends('layouts.app')

@section('pagetitle')
    Members
@endsection

@section('content')
<ul>
    <li>{{ Auth::user()->username }}</li>
    <li>{{ Auth::user()->firstname }}</li>
    <li>{{ Auth::user()->lastname }}</li>
    <li>{{ Auth::user()->email }}</li>
    <li>{{ Auth::user()->updated_at }}</li>
</ul>
 
@endsection