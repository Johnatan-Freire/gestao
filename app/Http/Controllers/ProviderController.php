<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Provider;

class ProviderController extends Controller
{
    public function index(Request $request)
    {
        $query = Provider::query();

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

        $providers = $query->get();
        return view('app.provider.index', ['providers' => $providers]);
    }

    public function create()
    {
        return view('app.provider.register');
    }

    public function store(Request $request)
    {
        $msg = 'Cadastro realizado com sucesso';

        $request->validate(
            [
                'name' => 'required',
                'uf' => 'required|min:2|max:2',
                'cnpj' => 'required|min:18|regex:/^\d{2}\.\d{3}\.\d{3}\/\d{4}-\d{2}$/',
                'email' => 'required|email',
            ],
            [
                'name.required' => 'Preencha este campo.',
                'uf.required' => 'Selecione um UF.',
                'uf.min' => 'UF inválido.',
                'uf.max' => 'UF inválido.',
                'cnpj.required' => 'Preencha este campo.',
                'cnpj.min' => 'CNPJ inválido.',
                'cnpj.regex' => 'CNPJ inválido.',
                'email.required' => 'Preencha este campo.',
                'email.email' => 'E-mail inválido.',
            ]
        );

        Provider::create($request->all());

        return redirect()->route('app.provider.create')->with('success', 'Cadastro realizado com sucesso!');
    }
}
