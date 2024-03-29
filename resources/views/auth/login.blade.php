@extends('layouts.layout')
@section('content')

<main class="login-form">
    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-4 mt-5 pt-5">
                <div class="card">
                    <h3 class="card-header text-center">Connecter</h3>
                    <div class="card-body">
                        <div class="card-body">
                            @if($errors)
                            @foreach($errors->all() as $error)
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>{{ $error }}</strong><br>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                            @endforeach

                            @endif
                            <form action="{{route('custom.login')}}" method="post">
                                @csrf
                                <div class="form-group mb-3">
                                    <input type="email" placeholder="username" name="email" class="form-control">
                                    @if($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email')}}</span>
                                    @endif
                                </div>
                                <div class="form-group mb-3">
                                    <input type="password" placeholder="Password" name="password" class="form-control">
                                    @if($errors->has('password'))
                                    <span class="text-danger">{{ $errors->first('password')}}</span>
                                    @endif
                                </div>
                                <div class="d-grid mx-auto">
                                    <button type="submit" class="btn btn-primary"> Connecter</button>
                                </div>
                            </form>
                            </>
                        </div>
                    </div>
                </div>
            </div>
</main>

@endsection