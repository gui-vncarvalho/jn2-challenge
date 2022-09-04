<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClientSaveRequest;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class AdminClientController extends Controller
{
    public function index()
    {
        $clients = Client::all();
        return view('admin.clients', compact('clients'));
    }

    //Formulário pra editar os dados do cliente
    public function edit(Client $client)
    {
        return view('admin.client-edit', [
            'client'=> $client
        ]);
    }

    //Receptor da requisição de update PUT
    public function update(Client $client,ClientSaveRequest $request)
    {
        $input = $request->validated();
        $client->fill($input);
        $client->save();

        return Redirect::route('admin.clients');
    }

    //Formulário para criação de novo cliente
    public function new()
    {
        return view('admin.client-create');
    }

    //Receptor da requisição de create POST
    public function create(ClientSaveRequest $request)
    {
        $input = $request->validated();
        Client::create($input);

        return Redirect::route('admin.clients');
    }

    public function delete(Client $client)
    {
        $client->delete();

        return Redirect::route('admin.clients');
    }
}
