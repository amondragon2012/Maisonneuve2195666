@extends('layouts.layout')
@section('content')

<div class="container pt-5 mt-5">
    <div class="row pt-5 mt-5">
        <div class="col-8 pt-2">
            <h1 class="display-4">@lang('lang.text_upload_file')</h1>
            <div class="card mt-5 mb-5">
                <div class="card-header">
                    @lang('lang.text_new_file')
                </div>
                <div class="card-body">
                    <form method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="control-group">
                                <label for="title">@lang('lang.text_title')</label>
                                <input type="text" name="title" id="title" class="form-control mt-2">
                            </div>
                            <div class="control-group">
                                <label for="file">@lang('lang.text_message')</label>
                                <input type="file" name="file" id="file" class="form-control mt-2">
                            </div>

                            <div class="control-group">
                                <input type="submit" class="btn btn-success mt-2" value="@lang('lang.text_send')">
                            </div>
                        </div>
                    </form>
                </div>
            </div>



        </div>
    </div>
</div>

@endsection