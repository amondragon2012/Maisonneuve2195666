@extends('layouts.layout')
@section('content')

<div class="container pt-5 mt-5">

    <table class="table-bordered pt-5 mt-5 pb-5 mb-5">
        <tr>
            <th>@lang('lang.text_title')</th>
            <th>@lang('lang.text_file')</th>
            <th>@lang('lang.text_download')</th>
        </tr>
        @foreach($data as $data)
        <tr>
            <td>{{$data->title}}</td>
            <td>{{$data->file}}</td>
            <td><a href="{{url('/download', $data->file)}}">@lang('lang.text_download')</a></td>

        </tr>
        @endforeach
    </table>

</div>

@endsection