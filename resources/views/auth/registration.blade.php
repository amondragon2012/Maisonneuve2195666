@extends('layouts.layout')
@section('content')

<main class="signup-form">
    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-4 mt-5 pt-5">
                <div class="card">
                    <h3 class="card-header text-center">Enregistre</h3>
                    <div class="card-body">
                        <form action="{{ route('custom.registration')}}" method="post">
                            @csrf
                            <div class="form-group mb-3">
                                <input type="text" placeholder="name" name="name" class="form-control"
                                    value="{{old('name')}}">
                                @if($errors->has('name'))
                                <span class="text-danger">{{$errors->first('name')}}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <input type="email" placeholder="username" name="email" class="form-control"
                                    value="{{old('email')}}">
                                @if($errors->has('email'))
                                <span class="text-danger">{{$errors->first('email')}}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <input type="password" placeholder="password" name="password" class="form-control">
                                @if($errors->has('password'))
                                <span class="text-danger">{{$errors->first('password')}}</span>
                                @endif
                            </div>
                            <div class="d-grid mx-auto">
                                <button type="submit" class="btn btn-primary">Enregistrer</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

</main>


@endsection