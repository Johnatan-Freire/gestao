@extends('layouts.basic')
@section('title', 'Produto')

@section('content')
    <x-app-layout>
        <div class="d-flex flex-column min-vh-100">
            <header class="bg-primary bg-gradient text-white">
                <div class="container px-4 py-5 text-center">
                    <h1 class="fw-bolder">{{ isset($product) ? 'Editar Produto' : 'Cadastrar Produto' }}</h1>
                </div>
            </header>

            <nav class="navbar bg-body-tertiary navbar-expand-lg navbar-light bg-light border">
                <div class="container-fluid">
                    <div class="btn-group" role="group" aria-label="Basic outlined example">
                        <a href="{{ route('app.product.create') }}" class="btn btn-outline-primary">Novo</a>
                        <a href="{{ route('app.product.index') }}" class="btn btn-outline-primary">Consultar</a>
                    </div>
                </div>
            </nav>

            <div class="flex-grow-1">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <form action="{{ isset($product) ? route('app.product.update', $product->id) : route('app.product.store') }}" method="post">
                    @csrf
                    @if(isset($product))
                        @method('PUT')
                    @endif
                    <input type="hidden" name="id" value="{{ $product->id ?? '' }}">

                    <div class="container mx-4 my-4">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <b><label for="product" class="form-label">Nome do Produto</label></b>
                                <input type="text" class="form-control" id="product" name="product" value="{{ $product->product ?? old('product') }}" placeholder="Nome do Produto">
                                @error('product')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <b><label for="price" class="form-label">Preço</label></b>
                                <input type="text" class="form-control valueMask" id="price" name="price" value="{{ $product->price ?? old('price') }}" placeholder="100.00">
                                @error('price')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <b><label for="stock" class="form-label">Quantidade em Estoque</label></b>
                                <input type="number" class="form-control" id="stock" name="stock" value="{{ $product->stock ?? old('stock') }}" placeholder="Quantidade">
                                @error('stock')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <b><label for="provider_id" class="form-label">Fornecedor</label></b>
                                <select class="form-select" aria-label="Selecione o fornecedor" name="provider_id">
                                    <option value="">Escolha um fornecedor</option>
                                    @foreach($providers as $provider)
                                        <option value="{{ $provider->id }}" {{ (isset($product) && $product->provider_id == $provider->id) ? 'selected' : '' }}>
                                            {{ $provider->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('provider_id')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">{{ isset($product) ? 'Atualizar' : 'Cadastrar' }}</button>
                        </div>
                    </div>
                </form>
            </div>

            @include('layouts.footer')
        </div>
    </x-app-layout>
@endsection
