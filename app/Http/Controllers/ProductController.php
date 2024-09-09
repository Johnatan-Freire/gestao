<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Provider;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Product::with('provider')->orderBy('id', 'asc');

        //Filtro
        if ($request->has('filter') && $request->filter != '' && $request->has('search') && $request->search != '') {
            $query->where($request->filter, 'like', '%' . $request->search . '%');
        } elseif ($request->has('search') && $request->search != '') {
            $query->where(function ($q) use ($request) {
                $q->where('product', 'like', '%' . $request->search . '%')
                    ->orWhere('price', 'like', '%' . $request->search . '%')
                    ->orWhere('stock', 'like', '%' . $request->search . '%')
                    ->orWhere('provider_id', 'like', '%' . $request->search . '%');
            });
        }

        $products = $query->paginate(10)->appends($request->all());;
        return view('app.product.index', ['products' => $products, 'request' => $request->all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $providers = Provider::all();
        return view('app.product.register', ['providers' => $providers]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        'product' => 'required|string|max:100',
        'price' => 'required|string',
        'stock' => 'required|integer|min:0',
        'provider_id' => 'required|exists:providers,id',
    ],
    [
        'product.required' => 'Por favor, informe o nome do produto.',
        'price.required' => 'Por favor, informe o preço do produto.',
        'stock.required' => 'Por favor, informe a quantidade em estoque.',
        'stock.integer' => 'A quantidade em estoque deve ser um número inteiro.',
        'provider_id.required' => 'Por favor, selecione um fornecedor válido.',
        'provider_id.exists' => 'O fornecedor selecionado não é válido.',
    ]);

    $price = str_replace(['R$', '.', ','], ['', '', '.'], $request->input('price'));

    Product::create([
        'product' => $request->input('product'),
        'price' => $price,
        'stock' => $request->input('stock'),
        'provider_id' => $request->input('provider_id'),
    ]);

    return redirect()->route('app.product.create')->with('success', 'Produto cadastrado com sucesso');
}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return 'show';
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
{
    $product = Product::findOrFail($id);
    $providers = Provider::all();

    return view('app.product.register', ['product' => $product, 'providers' => $providers]);
}

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
{
    $request->validate([
        'product' => 'required|string|max:100',
        'price' => 'required|string',
        'stock' => 'required|integer|min:0',
        'provider_id' => 'required|exists:providers,id',
    ],
    [
        'product.required' => 'Por favor, informe o nome do produto.',
        'price.required' => 'Por favor, informe o preço do produto.',
        'stock.required' => 'Por favor, informe a quantidade em estoque.',
        'stock.integer' => 'A quantidade em estoque deve ser um número inteiro.',
        'provider_id.required' => 'Por favor, selecione um fornecedor válido.',
        'provider_id.exists' => 'O fornecedor selecionado não é válido.',
    ]);

    $product = Product::findOrFail($id);

    $price = str_replace(['R$', '.', ','], ['', '', '.'], $request->input('price'));

    $product->update([
        'product' => $request->input('product'),
        'price' => $price,  
        'stock' => $request->input('stock'),
        'provider_id' => $request->input('provider_id'),
    ]);

    return redirect()->route('app.product.edit', $id)->with('success', 'Produto atualizado com sucesso');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
    
        return redirect()->route('app.product.index')->with('success', 'Produto removido com sucesso');
    }
    
}
