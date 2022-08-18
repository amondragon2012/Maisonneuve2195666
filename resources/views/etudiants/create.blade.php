@extends('layouts.layout')
@section('content')
<div class="container pt-5 mt-5">
    <div class="row pt-5 mt-5">
        <div class="col-8 pt-2">
            <h1 class="display-4">@lang('lang.text_add')</h1>
            <div class="card mt-5 mb-5">
                <div class="card-header">
                    @lang('lang.text_new')
                </div>
                <div class="card-body ">
                    <form action="" method="post">
                        @csrf
                        <div class="row">
                            <div class="control-group">
                                <label for="nom">@lang('lang.text_name_student')</label>
                                <input type="text" name="nom" id="nom" class="form-control mt-2" required>
                            </div>
                            <div class="control-group">
                                <label for="adresse">@lang('lang.text_address_student')</label>
                                <input name="adresse" id="adresse" class="form-control mt-2" required></input>
                            </div>
                            <div class="control-group">
                                <label for="phone">@lang('lang.text_phone_student')</label>
                                <input name="phone" id="phone" class="form-control mt-2" required></input>
                            </div>
                            <div class="control-group">
                                <label for="email">@lang('lang.text_email_student')</label>
                                <input name="email" id="email" class="form-control mt-2" required></input>
                            </div>
                            <div class="control-group">
                                <label for="date_naissance">@lang('lang.text_datebirth_student')</label>
                                <input name="date_naissance" id="date_naissance" class="form-control mt-2"
                                    required></input>
                            </div>
                            <div class="control-group">
                                <label for="ville_id" class="form-label">@lang('lang.text_city_student'):</label>
                                <select class="form-select" id="ville_id" name="ville_id">
                                    @foreach($villes as $ville)
                                    <option value="{{ $ville->id }}">{{ $ville->nom }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="control-group">

                                <input type="submit" class="btn btn-primary mt-3" value="@lang('lang.text_send')">
                            </div>
                        </div>
                    </form>
                </div>
            </div>



        </div>
    </div>
</div>

@endsection