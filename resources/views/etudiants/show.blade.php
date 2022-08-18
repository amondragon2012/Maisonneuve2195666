@extends('layouts.layout')
@section('content')


<div class="container pt-5 mt-5">
    <div class="row pt-5 mt-5">
        <div class="col-12 pt-2">
            <a href="{{ route('etudiant')}}" class="btn btn-primary">@lang('lang.text_btn_retourner')</a>
            <hr>
            <h1 class="display-one">{{ ucfirst($etudiant->nom) }}</h1>
            <p>@lang('lang.text_address_student'): {{$etudiant->adresse }}</p>
            <p>@lang('lang.text_phone_student'): {{ $etudiant->phone }}</p>
            <p>@lang('lang.text_email_student'): {{ $etudiant->email }}</p>
            <p>@lang('lang.text_datebirth_student'): {{ $etudiant->date_naissance }}</p>
            <p>@lang('lang.text_city_student'): {{ $etudiant->ville_id }}</p>
            <hr>
            <a href="{{route('etudiant.edit', $etudiant->id)}}"
                class="btn btn-outline-primary">@lang('lang.text_btn_modifier_student')</a>
            <hr>
            <form method="post" class="pb-5">
                @csrf
                @method('DELETE')
                <button class=" btn btn-outline-danger">@lang('lang.text_btn_delete')</button>
            </form>
        </div>
    </div>
</div>


@endsection