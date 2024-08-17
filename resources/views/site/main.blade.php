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
                <form class="row g-3">
                    <div class="col-12">
                        <b><label for="name"class="form-label">Nome</label></b>
                        <input type="text" class="form-control" id="name" placeholder="Julia Helen Martins">
                    </div>
                    <div class="col-12">
                        <b><label for="inputAddress2"class="form-label">E-mail</label></b>
                        <input type="email" class="form-control" id="inputAddress2" placeholder="juliahelen@gmail.com">
                    </div>
                    <div class="col-12">
                        <b><label for="fone"class="form-label">Telefone</label></b>
                        <input type="tel" class="form-control telMask" id="fone" placeholder="(61) 9 8653-1450">
                    </div>
                    <div class="col-12">
                        <b><label for="subject"class="form-label">Assunto</label></b>
                        <input type="text" class="form-control" id="subject" placeholder="Quero adquirir o sistema">
                    </div>
                    <div class="col-12">
                        <b><label for="message"class="form-label">Mensagem</label></b>
                        <textarea class="form-control messageMain" placeholder="Digite aqui sua mensagem..." id="message"></textarea>
                    </div>
                    <div class="col-12"><button type="submit" class="btn btn-primary">Enviar</button></div>
                </form>
            </div>
        </section>
    </main>

    @include('site.layout.partials.footer')
@endsection
