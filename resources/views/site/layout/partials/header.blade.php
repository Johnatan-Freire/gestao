<header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <!-- Logo -->
            <a class="navbar-brand" href="{{ route('site.index') }}">
                <img src="{{ asset('images/logo.png') }}" alt="Logo da empresa" class="logo">
            </a>

            <!-- Botão Toggle para dispositivos móveis -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Itens do Menu -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('site.index') }}">Início</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('site.about') }}">Sobre nós</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('site.contact') }}">Contato</a>
                    </li>
                </ul>

                <!-- Botão de Login -->
                <a href="{{ route('login') }}" class="btn btn-primary ms-lg-3">Login</a>
            </div>
        </div>
    </nav>
</header>
