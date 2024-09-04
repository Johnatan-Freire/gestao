@extends('layouts.basic')
@section('title', 'Fornecedor')

@section('content')
    <x-app-layout>
        <div class="d-flex flex-column min-vh-100">
            <header class="bg-primary bg-gradient text-white">
                <div class="container px-4 py-5 text-center">
                    <h1 class="fw-bolder">Fornecedores</h1>
                </div>
            </header>

            <nav class="navbar bg-body-tertiary navbar-expand-lg navbar-light bg-light border">
                <div class="container-fluid d-flex justify-content-between">
                    <div class="btn-group" role="group" aria-label="Basic outlined example">
                        <a href="{{ route('app.provider.create') }}" class="btn btn-outline-primary">Novo</a>
                        <a href="{{ route('app.provider.index') }}" class="btn btn-outline-primary">Consultar</a>
                    </div>

                    <div class="d-flex align-items-center">
                        <form class="d-flex ms-2" role="search" action="{{ route('app.provider.index') }}" method="GET">
                            <input type="hidden" id="filter" name="filter" value="">
                            <input class="form-control me-2" type="search" name="search" placeholder="Pesquisar"
                                aria-label="Search">
                            <button class="btn btn-outline-primary" type="submit">Pesquisar</button>
                        </form>
                    </div>
                </div>
            </nav>

            <div class="flex-grow-1">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nome</th>
                            <th scope="col">CNPJ</th>
                            <th scope="col">E-mail</th>
                            <th scope="col">UF</th>
                            <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($providers as $provider)
                            <tr>
                                <th scope="row">{{ $provider->id }}</th>
                                <td>{{ $provider->name }}</td>
                                <td>{{ $provider->cnpj }}</td>
                                <td>{{ $provider->email }}</td>
                                <td>{{ $provider->uf }}</td>
                                <td>
                                    <a href="{{ route('app.provider.edit', $provider->id) }}" class="btn btn-sm">
                                    </a>

                                    <form action="{{ route('app.provider.delete', $provider->id) }}" method="POST"
                                        style="display:inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm"
                                            onclick="return confirm('Tem certeza que deseja excluir este fornecedor?')">
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <div class="d-flex flex-column align-items-center">
                    {{ $providers->appends(request()->input())->links('pagination::bootstrap-4') }}
                </div>
            </div>

            @include('layouts.footer')
        </div>
    </x-app-layout>
@endsection
