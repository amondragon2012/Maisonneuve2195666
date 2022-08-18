@extends('layouts.layout')
@section('content')

<nav class="navbar navbar-expand-lg bg-light mt-5 mb-5">
    <div class="container-fluid mt-5 mb-5">
        <a class="navbar-brand" href="#">{{ $name }}</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                @guest
                <a class="nav-link" href="{{route('login')}}">Login</a>
                <a class="nav-link" href="{{route('registration')}}">Registration</a>
                @else
                <a class="nav-link" href="{{route('blog')}}">Blog</a>
                <a class="nav-link" href="{{route('etudiant')}}">Etudiants</a>
                <a class="nav-link" href="{{route('logout')}}">Logout</a>
                @endguest
                <a class="nav-link" href="{{route('lang', 'fr')}}">FR</a>
                <a class="nav-link" href="{{route('lang', 'en')}}">EN</a>
            </div>
        </div>
        @if(session('success'))
        <span class="text-success">{{session('success')}} </span>
        @endif
    </div>
</nav>

@endsection