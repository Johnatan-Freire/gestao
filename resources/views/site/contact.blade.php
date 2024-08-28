@extends('layouts.basic')

@section('content')
    @include('site.layout.partials.header')
    <header class="bg-primary bg-gradient text-white">
        <div class="container px-4 py-5 text-center">
            <h1 class="fw-bolder">Entre Em Contato Conosco</h1>
        </div>
    </header>

    @component('site.layout.components.contact_form')
    
    @endcomponent

    @include('layouts.footer')
@endsection
