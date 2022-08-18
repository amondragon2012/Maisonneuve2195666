@extends('layouts.layout')
@section('content')
<div class="container mt-5 mb-5 pt-5">
    <div class="row">
        <div class="col-12 pt-2">
            <a href="{{ route('blog')}}" class="btn btn-primary btn-sm">@lang('lang.text_btn_retourner')</a>
            <hr>
            <h1 class="display-one">{{ ucfirst($blogPost->title) }}</h1>
            <p>{!! $blogPost->body !!}</p>
            <p>Auteur: {{ $blogPost->blogHasUser->name }}</p>
            <hr>
            <a href="{{route('blog.edit', $blogPost->id)}}"
                class="btn btn-outline-primary">@lang('lang.text_btn_modifier')</a>
            <hr>
            <form method="post">
                @csrf
                @method('DELETE')
                <button class="btn btn-outline-danger">@lang('lang.text_btn_delete')</button>
            </form>
        </div>
    </div>
</div>
@endsection