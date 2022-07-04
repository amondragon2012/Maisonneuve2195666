@extends('layouts.layout')
@section('content')

<div class="container pt-5 mt-5">
    <div class="row pt-5 mt-5">
        <div class="col-12 pt-2">
            <div class="row">
                <div class="col-8 pt-2">
                    <h1 class="display-one">Liste d'étudiants</h1>

                </div>
                <div class="col-4 pb-5 pt-2">

                    <a href="{{route('etudiant.create')}}" class="btn btn-primary btn-lg ">Ajouter un nouvel
                        étudiant</a>
                </div>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Adresse</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Date Naissance</th>
                        <th>Ville</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>


                    @forelse($etudiants as $etudiant)

                    <td>{{$etudiant->nom}}</td>
                    <td>{{$etudiant->adresse}}</td>
                    <td>{{$etudiant->phone}}</td>
                    <td>{{$etudiant->email}}</td>
                    <td>{{$etudiant->date_naissance}}</td>
                    <td>{{$etudiant->ville}}</td>
                    <td><a href="{{route('etudiant.show', $etudiant->id) }}" class="btn btn-primary btn-sm ">Voir</a>
                    </td>
                    </tr>

                    @empty
                    <li class="text-warning">Aucun étudiant disponible</li>
                    @endforelse

                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection