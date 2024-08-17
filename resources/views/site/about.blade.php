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

    <main class="about">
        <header class="bg-primary bg-gradient text-white">
            <div class="container px-4 text-center">
                <h1 class="fw-bolder">Bem Vindo Ao Sistema de Gestão</h1>
                <p class="lead">Confira as 4 principais funcionalidades deste sistema</p>
                <a class="btn btn-lg btn-light" href="#about">Desça e confira!!</a>
            </div>
        </header>
        
        <section id="about">
            <div class="container px-4">
                <div class="row gx-4 justify-content-center">
                    <div class="col-lg-8">
                        <h2>Sobre o Sistema de Gestão</h2>
                        <p class="lead">Este sistema de gestão é uma solução abrangente e eficiente para otimizar as operações diárias da sua empresa. Desenvolvido com o objetivo de centralizar e simplificar processos, ele permite que você gerencie todos os aspectos do seu negócio em uma única plataforma.</p>
                        <ul>
                            <li><b>Automação de Processos:</b> Automatize tarefas rotineiras para reduzir o tempo e os erros operacionais.</li>
                            <li><b>Gerenciamento de Projetos:</b> Acompanhe o progresso de projetos, atribua tarefas e monitore prazos em tempo real.</li>
                            <li><b>Relatórios Personalizados:</b> Gere relatórios detalhados para tomar decisões informadas e estratégicas.</li>
                            <li><b>Gestão de Estoque:</b> Gerencie inventários, controle de pedidos e níveis de estoque com precisão.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services section-->
        <section class="bg-light" id="services">
            <div class="container px-4">
                <div class="row gx-4 justify-content-center">
                    <div class="col-lg-8">
                        <h2>Por que Escolher Nosso Sistema de Gestão?</h2>
                        <p class="lead">Escolher o nosso sistema de gestão significa investir em uma solução que evolui com o seu negócio. Ele é projetado para ser escalável e adaptável, atendendo às necessidades de empresas de todos os tamanhos. Com uma interface amigável e uma gama de funcionalidades poderosas, você estará sempre à frente da concorrência.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact section-->
        <section id="contact">
            <div class="container px-4">
                <div class="row gx-4 justify-content-center">
                    <div class="col-lg-8">
                        <h2>Entre em contato conosco</h2>
                        <p class="lead">Tem alguma dúvida ou deseja saber mais sobre como nosso sistema de gestão pode ajudar sua empresa a crescer? Estamos aqui para ajudar! <a href="{{route('site.contact')}}">Entre em contato conosco</a> e nossa equipe estará pronta para oferecer todo o suporte necessário.</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="text-center text-white" style="background-color: #ffffff;">
        <div class="text-center p-3" style="background-color: rgb(255, 255, 255);">
            <span class="text-black">© 2024 Feito por:</span>
            <a class="text-black" href="https://johnatanfreire.com.br/">Johnatan Freire</a>
        </div>
    </footer>
</body>

</html>
