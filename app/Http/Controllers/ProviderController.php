<?php

namespace App\Http\Controllers;

use App\Models\Provider;
use Illuminate\Http\Request;

class providerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Provider::query()->orderBy('id', 'asc');

        //Filtro
        if ($request->has('filter') && $request->filter != '' && $request->has('search') && $request->search != '') {
            $query->where($request->filter, 'like', '%' . $request->search . '%');
        } elseif ($request->has('search') && $request->search != '') {
            $query->where(function ($q) use ($request) {
                $q->where('name', 'like', '%' . $request->search . '%')
                    ->orWhere('cnpj', 'like', '%' . $request->search . '%')
                    ->orWhere('email', 'like', '%' . $request->search . '%')
                    ->orWhere('uf', 'like', '%' . $request->search . '%');
            });
        }

        $providers = $query->paginate(10)->appends($request->all());;
        return view('app.provider.index', ['providers' => $providers, 'request' => $request->all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('app.provider.register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'uf' => 'required|min:2|max:2',
            'cnpj' => 'required|min:18|regex:/^\d{2}\.\d{3}\.\d{3}\/\d{4}-\d{2}$/',
            'email' => 'required|email',
        ]);

        Provider::create($request->all());
        return redirect()->route('app.provider.create')->with('success', 'Cadastro realizado com sucesso');
    }

    /**
     * Display the specified resource.
     */
    public function show(provider $provider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $provider = Provider::findOrFail($id);
        return view('app.provider.register', ['provider' => $provider]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'uf' => 'required|min:2|max:2',
            'cnpj' => 'required|min:18|regex:/^\d{2}\.\d{3}\.\d{3}\/\d{4}-\d{2}$/',
            'email' => 'required|email',
        ]);

        $provider = Provider::findOrFail($id);
        $provider->update($request->all());
        return redirect()->route('app.provider.edit', ['id' => $id])->with('success', 'Cadastro atualizado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $provider = Provider::findOrFail($id);
        $provider->delete();
        return redirect()->route('app.provider.index')->with('success', 'Fornecedor removido com sucesso');
    }
}
