@extends('layouts.layout')
@section('content')
<div class="container pt-5 mt-5">
    <div class="row pt-5 mt-5">
        <div class="col-8 pt-2">
            <h1 class="display-4">Ajouter un nouvel étudiant</h1>
            <div class="card mt-5 mb-5">
                <div class="card-header">
                    Nouvel Étudiant
                </div>
                <div class="card-body ">
                    <form action="" method="post">
                        @csrf
                        <div class="row">
                            <div class="control-group">
                                <label for="nom">Nom</label>
                                <input type="text" name="nom" id="nom" class="form-control mt-2" required>
                            </div>
                            <div class="control-group">
                                <label for="adresse">Adresse</label>
                                <input name="adresse" id="adresse" class="form-control mt-2" required></input>
                            </div>
                            <div class="control-group">
                                <label for="phone">Phone</label>
                                <input name="phone" id="phone" class="form-control mt-2" required></input>
                            </div>
                            <div class="control-group">
                                <label for="email">Email</label>
                                <input name="email" id="email" class="form-control mt-2" required></input>
                            </div>
                            <div class="control-group">
                                <label for="date_naissance">Date de Naissance</label>
                                <input name="date_naissance" id="date_naissance" class="form-control mt-2"
                                    required></input>
                            </div>
                            <div class="control-group">
                                <label for="ville_id" class="form-label">Ville:</label>
                                <select class="form-select" id="ville_id" name="ville_id">
                                    @foreach($villes as $ville)
                                    <option value="{{ $ville->id }}">{{ $ville->nom }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="control-group">

                                <input type="submit" class="btn btn-primary mt-3" value="Envoyer">
                            </div>
                        </div>
                    </form>
                </div>
            </div>



        </div>
    </div>
</div>

@endsection