@extends('layouts.master')

@section('content')

    @include('contents.documentation.header')

    <div class="uk-grid" data-uk-grid-margin>
        <div class="uk-width-medium-3-4">
            @include('contents.documentation.code')
        </div>
        <div class="uk-width-medium-1-4">
            @include('contents.documentation.sidebar')
        </div>
    </div>

@endsection