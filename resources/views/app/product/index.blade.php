@extends('layouts.basic')
@section('title', 'Produto')

@section('content')
    <x-app-layout>
        <header class="bg-primary bg-gradient text-white">
            <div class="container px-4 py-5 text-center">
                <h1 class="fw-bolder">Produtos</h1>
            </div>
        </header>
        <nav class="navbar bg-body-tertiary navbar-expand-lg navbar-light bg-light border">
            <div class="container-fluid d-flex justify-content-between">
                <div class="btn-group" role="group" aria-label="Basic outlined example">
                    <a href="{{ route('app.product.create') }}" class="btn btn-outline-primary">Cadastrar Produto</a>
                    <a href="{{ route('app.product.index') }}" class="btn btn-outline-primary">Consultar Produto</a>
                </div>

                <div class="d-flex align-items-center">
                    <form class="d-flex ms-2" role="search" action="{{ route('app.product.index') }}" method="GET">
                        <input type="hidden" id="filter" name="filter" value="">
                        <input class="form-control me-2" type="search" name="search" placeholder="Pesquisar"
                            aria-label="Search">
                        <button class="btn btn-outline-primary" type="submit">Pesquisar</button>
                    </form>
                </div>
            </div>
        </nav>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Produto</th>
                    <th scope="col">Preço</th>
                    <th scope="col">Estoque</th>
                    <th scope="col">Fornecedor</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <th scope="row">{{ $product->id }}</th>
                        <td>{{ $product->product }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->stock }}</td>
                        <td>{{ $product->provider->name ?? 'Fornecedor não cadastrado' }}</td>
                        <td>
                            <a href="{{ route('app.product.edit', $product->id) }}" class="btn btn-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path
                                        d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                    <path fill-rule="evenodd"
                                        d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z" />
                                </svg>
                            </a>

                            <form action="{{ route('app.product.destroy', $product->id) }}" method="POST"
                                style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm"
                                    onclick="return confirm('Tem certeza que deseja excluir este fornecedor?')">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                        <path
                                            d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z" />
                                        <path
                                            d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z" />
                                    </svg>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            
        </table>

        <div class="d-flex flex-column align-items-center">
            {{ $products->appends(request()->input())->links('pagination::bootstrap-4') }}

        </div>
        


        @include('layouts.footer')

    </x-app-layout>
@endsection
