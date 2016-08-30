@extends('layouts.master')

@section('content')
    <div class="uk-grid" data-uk-grid-margin>
        <div class="uk-width-medium-3-4">
            @include('contents.blog.article')
        </div>

        <div class="uk-width-medium-1-4">
            @include('contents.blog.sidebar')
        </div>

    </div>
@endsection