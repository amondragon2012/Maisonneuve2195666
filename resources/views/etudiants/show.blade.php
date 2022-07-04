@extends('layouts.layout')
@section('content')


<div class="container pt-5 mt-5">
    <div class="row pt-5 mt-5">
        <div class="col-12 pt-2">
            <a href="{{ route('etudiant')}}" class="btn btn-primary">Retourner</a>
            <hr>
            <h1 class="display-one">{{ ucfirst($etudiant->nom) }}</h1>
            <p>Adresse: {{$etudiant->adresse }}</p>
            <p>Phone: {{ $etudiant->phone }}</p>
            <p>Email: {{ $etudiant->email }}</p>
            <p>Date Naissance: {{ $etudiant->date_naissance }}</p>
            <p>Ville: {{ $etudiant->ville_id }}</p>
            <hr>
            <a href="{{route('etudiant.edit', $etudiant->id)}}" class="btn btn-outline-primary">Modifier etudiant</a>
            <hr>
            <form method="post" class="pb-5">
                @csrf
                @method('DELETE')
                <button class=" btn btn-outline-danger">Supprimer</button>
            </form>
        </div>
    </div>
</div>


@endsection