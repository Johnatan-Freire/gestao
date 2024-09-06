<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

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
        return 'create';
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return 'store';
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
    public function edit(string $id)
    {
        return 'edit';
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return 'update';
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return 'destroy';
    }
}
