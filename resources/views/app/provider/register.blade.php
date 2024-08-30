@extends('layouts.basic')
@section('title', 'Fornecedor')

@section('content')
    <x-app-layout>
        <header class="bg-primary bg-gradient text-white">
            <div class="container px-4 py-5 text-center">
                <h1 class="fw-bolder">Cadastrar Fornecedor</h1>
            </div>
        </header>

        <nav class="navbar bg-body-tertiary navbar-expand-lg navbar-light bg-light border">
            <div class="container-fluid">
                <div class="btn-group" role="group" aria-label="Basic outlined example">
                    <a href="{{ route('app.provider.create') }}" class="btn btn-outline-primary">Novo</a>
                    <a href="{{ route('app.provider.index') }}" class="btn btn-outline-primary">Consultar</a>
                    
                </div>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Search">
                    <button class="btn btn-outline-primary" type="submit">Pesquisar</button>
                </form>
            </div>
        </nav>


        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('app.provider.store') }}" method="post" style="margin-bottom: 12%">
            @csrf
            <div class="container mx-4 my-4">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <b><label for="name" class="form-label">Nome</label></b>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Americanas">
                        @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <b><label for="uf" class="form-label">UF</label></b>
                        <select class="form-select" aria-label="Default select example" name="uf">
                            <option selected>Escolha um UF</option>
                            <option value="AC">Acre (AC)</option>
                            <option value="AL">Alagoas (AL)</option>
                            <option value="AP">Amapá (AP)</option>
                            <option value="AM">Amazonas (AM)</option>
                            <option value="BA">Bahia (BA)</option>
                            <option value="CE">Ceará (CE)</option>
                            <option value="DF">Distrito Federal (DF)</option>
                            <option value="ES">Espírito Santo (ES)</option>
                            <option value="GO">Goiás (GO)</option>
                            <option value="MA">Maranhão (MA)</option>
                            <option value="MT">Mato Grosso (MT)</option>
                            <option value="MS">Mato Grosso do Sul (MS)</option>
                            <option value="MG">Minas Gerais (MG)</option>
                            <option value="PA">Pará (PA)</option>
                            <option value="PB">Paraíba (PB)</option>
                            <option value="PR">Paraná (PR)</option>
                            <option value="PE">Pernambuco (PE)</option>
                            <option value="PI">Piauí (PI)</option>
                            <option value="RJ">Rio de Janeiro (RJ)</option>
                            <option value="RN">Rio Grande do Norte (RN)</option>
                            <option value="RS">Rio Grande do Sul (RS)</option>
                            <option value="RO">Rondônia (RO)</option>
                            <option value="RR">Roraima (RR)</option>
                            <option value="SC">Santa Catarina (SC)</option>
                            <option value="SP">São Paulo (SP)</option>
                            <option value="SE">Sergipe (SE)</option>
                            <option value="TO">Tocantins (TO)</option>
                        </select>
                        @error('uf')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <b><label for="cnpj" class="form-label">CNPJ</label></b>
                        <input type="text" class="form-control cnpjMask" id="cnpj" name="cnpj"
                            placeholder="00.000.000/0000-00">
                        @error('cnpj')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <b><label for="email" class="form-label">E-mail</label></b>
                        <input type="email" class="form-control" id="email" name="email"
                            placeholder="americanas@gmail.com">
                        @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-12"><button type="submit" class="btn btn-primary">Cadastrar</button></div>
            </div>
        </form>

        @include('layouts.footer')
    </x-app-layout>
@endsection
