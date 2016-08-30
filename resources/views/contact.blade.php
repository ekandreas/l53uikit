@extends('layouts.master')

@section('content')
    @include('content.contact.header')

    @include('content.contact.persons')

    @include('content.contact.peoples')

    <hr class="uk-grid-divider">

    <div class="uk-grid" data-uk-grid-margin>

        <div class="uk-width-medium-2-3">
            @include('content.contact.form')
        </div>

        <div class="uk-width-medium-1-3">
            @include('content.contact.address')
        </div>

    </div>
@endsection