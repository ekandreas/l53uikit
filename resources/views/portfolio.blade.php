@extends('layouts.master')

@section('content')

    @include('contents.portfolio.header')
    <div class="uk-grid" data-uk-grid-margin>
        <div class="uk-width-1-1">

            @include('contents.portfolio.imageslist')

        </div>
    </div>

@endsection