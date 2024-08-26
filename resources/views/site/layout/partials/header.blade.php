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

            <a href="{{ route('login') }}" class="text-decoration-none text-black">Login</a>
        </div>
    </nav>
</header>