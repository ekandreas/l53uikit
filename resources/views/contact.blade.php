@extends('layouts.master')

@section('content')
    @include('contents.contact.header')

    @include('contents.contact.persons')

    @include('contents.contact.peoples')

    <hr class="uk-grid-divider">

    <div class="uk-grid" data-uk-grid-margin>

        <div class="uk-width-medium-2-3">
            @include('contents.contact.form')
        </div>

        <div class="uk-width-medium-1-3">
            @include('contents.contact.address')
        </div>

    </div>
@endsection