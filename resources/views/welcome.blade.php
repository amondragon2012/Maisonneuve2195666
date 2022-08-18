@extends('layouts.layout')
@section('content')


<!-- Masthead-->
<header class="masthead">
    <div class="container">
        <div class="masthead-subheading">Bienvenue a notre blog!!</div>
        <div class="masthead-heading text-uppercase">Maisonneuve</div>
        <a class="btn btn-primary btn-xl text-uppercase" href="{{route('dashboard')}}">Dashboard</a>
    </div>
</header>

@endsection