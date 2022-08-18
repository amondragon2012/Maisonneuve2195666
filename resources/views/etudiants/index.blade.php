@extends('layouts.layout')
@section('content')

<div class="container pt-5 mt-5">
    <div class="row pt-5 mt-5">
        <div class="col-12 pt-2">
            <div class="row">
                <div class="col-8 pt-2">
                    <h1 class="display-one">@lang('lang.text_list_student')</h1>

                </div>
                <div class="col-4 pb-5 pt-2">

                    <a href="{{route('etudiant.create')}}" class="btn btn-primary btn-lg ">@lang('lang.text_add')</a>
                </div>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th>@lang('lang.text_name_student')</th>
                        <th>@lang('lang.text_address_student')</th>
                        <th>@lang('lang.text_phone_student')</th>
                        <th>@lang('lang.text_email_student')</th>
                        <th>@lang('lang.text_datebirth_student')</th>
                        <th>@lang('lang.text_city_student')</th>
                        <th>@lang('lang.text_action_student')</th>
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
                    <td><a href="{{route('etudiant.show', $etudiant->id) }}"
                            class="btn btn-primary btn-sm ">@lang('lang.text_view_student')</a>
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