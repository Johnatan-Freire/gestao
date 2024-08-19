@extends('site.layout.basic')
@section('title', 'Inicio')

@section('content')
    @include('site.layout.partials.header')

    <main class="main">
        <section class="apresentationMain">
            <div class="contentMain">
                <h1>Sistema de Gestão</h1>
                <p>Um dos melhores sistemas de gestão para sua empresa.</p>
                <div class="infoCheck">
                    <img src="{{ asset('images/check.png') }}" alt="Ícone de check">
                    <span>Controle total do seu negócio</span>
                </div>
                <div class="infoCheck">
                    <img src="{{ asset('images/check.png') }}" alt="Ícone de check">
                    <span>Gestão eficiente, crescimento garantido.</span>
                </div>
                <div class="infoCheck">
                    <img src="{{ asset('images/check.png') }}" alt="Ícone de check">
                    <span>Simplifique a administração da sua empresa.</span>
                </div>
                <div class="infoCheck">
                    <img src="{{ asset('images/check.png') }}" alt="Ícone de check">
                    <span>Suas operações, um clique de distância.</span>
                </div>
            </div>
            <div class="video"><img src="{{ asset('images/play.png') }}" alt="Ícone de vídeo"></div>
        </section>
        <section class="contactMain">
            <div class="contentContact">
                <h1>Contato</h1>
                <p>Em caso de dúvidas, estamos à disposição para ajudar. Entre em contato pelo e-mail ou pelo
                    telefone.</p>
                @component('site.layout.components.contact_form')
                    
                @endcomponent
            </div>
        </section>
    </main>

    @include('site.layout.partials.footer')
@endsection
