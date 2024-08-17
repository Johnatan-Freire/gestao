<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid"><a class="navbar-brand" href="{{ route('site.index') }}"><img
                        src="{{ asset('images/logo.png') }}" alt="Logo da empresa" class="logo"></a><button
                    class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"><span
                        class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link active" aria-current="page"
                                href="{{ route('site.index') }}">Início</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('site.about') }}">Sobre nós</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('site.contact') }}">Contato</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
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
                    <div class="col-12"><b><label for="name"class="form-label">Nome</label></b><input type="text"
                            class="form-control" id="name" placeholder="Julia Helen Martins"></div>
                    <div class="col-12"><b><label for="inputAddress2"class="form-label">E-mail</label></b><input
                            type="email" class="form-control" id="inputAddress2" placeholder="juliahelen@gmail.com">
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
                        <textarea class="form-control" placeholder="Digite aqui sua mensagem..." id="message" style="height: 100px"></textarea>
                    </div>
                    <div class="col-12"><button type="submit" class="btn btn-primary">Enviar</button></div>
                </form>
            </div>
        </section>
    </main>

    <form action="" class="ls-form ls-form-horizontal" data-ls-module="form">
        <label class="ls-label col-md-3">
          <b class="ls-label-text">Telefone</b>
          <input type="text" name="cel2" class="ls-mask-phone8_with_ddd" placeholder="(99) 9999-9999" >
        </label>
      
        <label class="ls-label col-md-3">
          <b class="ls-label-text">CNPJ</b>
          <input type="text" name="cnpj" class="ls-mask-cnpj" placeholder="00.000.000/0000-00" >
        </label>
      
        <label class="ls-label col-md-3">
          <b class="ls-label-text">CPF</b>
          <input type="text" name="cpf" class="ls-mask-cpf" placeholder="000.000.000-00" >
        </label>
        <label class="ls-label col-md-2">
          <b class="ls-label-text">CEP</b>
          <input type="text" name="cep" class="ls-mask-cep" placeholder="00000-000" >
        </label>
      </form>

    <footer class="text-center text-white" style="background-color: #ffffff;">
        <div class="text-center p-3" style="background-color: rgb(255, 255, 255);">
            <span class="text-black">© 2024 Feito por:</span>
            <a class="text-black" href="https://johnatanfreire.com.br/">Johnatan Freire</a>
        </div>
    </footer>
</body>

</html>
