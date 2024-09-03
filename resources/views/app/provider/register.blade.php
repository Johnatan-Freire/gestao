@extends('layouts.basic')
@section('title', 'Fornecedor')

@section('content')
    <x-app-layout>
        <header class="bg-primary bg-gradient text-white">
            <div class="container px-4 py-5 text-center">
                <h1 class="fw-bolder">{{ isset($provider) ? 'Editar Fornecedor' : 'Cadastrar Fornecedor' }}</h1>
            </div>
        </header>

        <nav class="navbar bg-body-tertiary navbar-expand-lg navbar-light bg-light border">
            <div class="container-fluid">
                <div class="btn-group" role="group" aria-label="Basic outlined example">
                    <a href="{{ route('app.provider.create') }}" class="btn btn-outline-primary">Novo</a>
                    <a href="{{ route('app.provider.index') }}" class="btn btn-outline-primary">Consultar</a>
                </div>
            </div>
        </nav>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ isset($provider) ? route('app.provider.update', $provider->id) : route('app.provider.store') }}" method="post" style="margin-bottom: 12%">
            @csrf
            @if(isset($provider))
                @method('PUT')
            @endif
            <input type="hidden" name="id" value="{{ $provider->id ?? '' }}">

            <div class="container mx-4 my-4">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <b><label for="name" class="form-label">Nome</label></b>
                        <input type="text" class="form-control" id="name" name="name" value="{{ $provider->name ?? old('name') }}" placeholder="Americanas">
                        @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <b><label for="uf" class="form-label">UF</label></b>
                        <select class="form-select" aria-label="Default select example" name="uf">
                            <option selected>Escolha um UF</option>
                            @foreach(['AC', 'AL', 'AP', 'AM', 'BA', 'CE', 'DF', 'ES', 'GO', 'MA', 'MT', 'MS', 'MG', 'PA', 'PB', 'PR', 'PE', 'PI', 'RJ', 'RN', 'RS', 'RO', 'RR', 'SC', 'SP', 'SE', 'TO'] as $state)
                                <option value="{{ $state }}" {{ (isset($provider) && $provider->uf == $state) ? 'selected' : '' }}>{{ $state }}</option>
                            @endforeach
                        </select>
                        @error('uf')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <b><label for="cnpj" class="form-label">CNPJ</label></b>
                        <input type="text" class="form-control cnpjMask" id="cnpj" name="cnpj" value="{{ $provider->cnpj ?? old('cnpj') }}" placeholder="00.000.000/0000-00">
                        @error('cnpj')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <b><label for="email" class="form-label">E-mail</label></b>
                        <input type="email" class="form-control" id="email" name="email" value="{{ $provider->email ?? old('email') }}" placeholder="americanas@gmail.com">
                        @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">{{ isset($provider) ? 'Atualizar' : 'Cadastrar' }}</button>
                </div>
            </div>
        </form>

        @include('layouts.footer')
    </x-app-layout>
@endsection
