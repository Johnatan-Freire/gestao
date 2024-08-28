@extends('layouts.basic')
@section('title', 'Sobre nós')

@section('content')

    @include('site.layout.partials.header')

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
                        <p class="lead">Este sistema de gestão é uma solução abrangente e eficiente para otimizar as
                            operações diárias da sua empresa. Desenvolvido com o objetivo de centralizar e simplificar
                            processos, ele permite que você gerencie todos os aspectos do seu negócio em uma única
                            plataforma.</p>
                        <ul>
                            <li><b>Automação de Processos:</b> Automatize tarefas rotineiras para reduzir o tempo e os erros
                                operacionais.</li>
                            <li><b>Gerenciamento de Projetos:</b> Acompanhe o progresso de projetos, atribua tarefas e
                                monitore prazos em tempo real.</li>
                            <li><b>Relatórios Personalizados:</b> Gere relatórios detalhados para tomar decisões informadas
                                e estratégicas.</li>
                            <li><b>Gestão de Estoque:</b> Gerencie inventários, controle de pedidos e níveis de estoque com
                                precisão.</li>
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
                        <p class="lead">Escolher o nosso sistema de gestão significa investir em uma solução que evolui
                            com o seu negócio. Ele é projetado para ser escalável e adaptável, atendendo às necessidades de
                            empresas de todos os tamanhos. Com uma interface amigável e uma gama de funcionalidades
                            poderosas, você estará sempre à frente da concorrência.</p>
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
                        <p class="lead">Tem alguma dúvida ou deseja saber mais sobre como nosso sistema de gestão pode
                            ajudar sua empresa a crescer? Estamos aqui para ajudar! <a
                                href="{{ route('site.contact') }}">Entre em contato conosco</a> e nossa equipe estará pronta
                            para oferecer todo o suporte necessário.</p>
                    </div>
                </div>
            </div>
        </section>
    </main>
    
    @include('layouts.footer')
@endsection
