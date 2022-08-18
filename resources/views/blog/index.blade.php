@extends('layouts.layout')
@section('content')

<div class="container mt-5 mb-5 pt-5">
    <div class="row">
        <div class="col-12 pt-2">
            <div class="row">
                <div class="col-8">
                    <h1 class="display-one">@lang('lang.text_our_blog')</h1>
                    <p>@lang('lang.text_good_reading')</p>
                </div>
                <div class="col-4">
                    <p>@lang('lang.text_add_new_message')</p>
                    <a href="{{route('blog.create')}}"
                        class="btn btn-primary btn-lg ">@lang('lang.text_new_message')</a>
                </div>
            </div>
            <ul>


                @forelse($posts as $post)
                <li> <a href="{{ route('blog.show', $post->id) }}">{{ ucfirst($post->title) }}</a> </li>
                @empty
                <li class="text-warning">@lang('lang.text_alert')</li>
                @endforelse
            </ul>
        </div>
    </div>
</div>

@endsection