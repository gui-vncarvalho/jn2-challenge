@extends('layouts.default')

@section('content')
    <section class="text-gray-600 overflow-hidden">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-wrap -m-4">
                <table class="table-auto w-full text-left whitespace-no-wrap">
                    <thead>
                        <tr>
                            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">ID</th>
                            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">Nome</th>
                            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">Telefone</th>
                            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">CPF</th>
                            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">Placa do Carro</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y">
                        <tr>
                            <td class="px-4 py-3">{{$client->id}}</td>
                            <td class="px-4 py-3">{{$client->name}}</td>
                            <td class="px-4 py-3">{{$client->phone}}</td>
                            <td class="px-4 py-3">{{$client->cpf}}</td>
                            <td class="px-4 py-3">{{$client->plate}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
