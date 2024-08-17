@extends('site.layout.basic')

@section('content')
    @include('site.layout.partials.header')
    <header class="bg-primary bg-gradient text-white">
        <div class="container px-4 py-5 text-center">
            <h1 class="fw-bolder">Entre Em Contato Conosco</h1>
        </div>
    </header>

    <form action="#">
        <div class="mx-4 my-3">
            <div class="col-12 mb-3">
                <b><label for="name"class="form-label">Nome</label></b>
                <input type="text" class="form-control" id="name" placeholder="Julia Helen Martins">
            </div>
            <div class="col-12 mb-3">
                <b><label for="inputAddress2"class="form-label">E-mail</label></b>
                <input type="email" class="form-control" id="inputAddress2" placeholder="juliahelen@gmail.com">
            </div>
            <div class="col-12 mb-3">
                <b><label for="fone"class="form-label">Telefone</label></b>
                <input type="tel" class="form-control telMask" id="fone" placeholder="(61) 9 8653-1450">
            </div>
            <div class="col-12 mb-3">
                <b><label for="subject"class="form-label">Assunto</label></b>
                <input type="text" class="form-control" id="subject" placeholder="Quero adquirir o sistema">
            </div>
            <div class="col-12 mb-3">
                <b><label for="message"class="form-label">Mensagem</label></b>
                <textarea class="form-control messageMain" placeholder="Digite aqui sua mensagem..." id="message"></textarea>
            </div>
            <div class="col-12"><button type="submit" class="btn btn-primary">Enviar</button></div>
        </div>
    </form>
    @include('site.layout.partials.footer')
@endsection
