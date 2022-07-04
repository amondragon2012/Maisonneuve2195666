@extends('layouts.layout')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-12 pt-2">
            <a href="{{ route('etudiant')}}" class="btn btn-primary btn-sm">Retourner</a>
            <hr>
            <h1 class="display-one">{{ ucfirst($etudiant->nom) }}</h1>
            <p>Adress:{{$etudiant->adresse }}</p>
            <p>Phone: {{ $etudiant->phone }}</p>
            <p>email: {{ $etudiant->email }}</p>
            <p>Date Naissance: {{ $etudiant->date_naissance }}</p>
            <hr>
            <a href="" class="btn btn-outline-primary">Modifier etudiant</a>
            <hr>

        </div>
    </div>
</div>
@endsection