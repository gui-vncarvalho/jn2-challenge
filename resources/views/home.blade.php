@extends('layouts.default')

@section('content')
    <section>
        <div class="container px-5 mx-auto">
            <form action="/" method="get" class="flex items-center space-x-5">
                <div>
                    <input value="{{ request()->search }}"
                           type="text" id="search" name="search" placeholder="Pesquisa pelo ID"
                           class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
                <div>
                    <button type="submit" class="flex ml-auto text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded">Pesquisar</button>
                </div>
            </form>
        </div>
    </section>

    <section class="text-gray-600">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-wrap -m-4">
                <table class="table-auto w-full text-left whitespace-no-wrap">
                    <thead>
                    <tr>
                        <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">#</th>
                        <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">Nome</th>
                        <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">Telefone</th>
                        <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">CPF</th>
                        <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">Placa do Carro</th>
                        <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100"></th>
                    </tr>
                    </thead>
                    <tbody class="divide-y">
                    @foreach($clients as $client)
                    <tr @if($loop->even)class="bg-gray-100"@endif>
                        <td class="px-4 py-3">{{$client->id}}</td>
                        <td class="px-4 py-3">{{$client->name}}</td>
                        <td class="px-4 py-3">{{$client->phone}}</td>
                        <td class="px-4 py-3">{{$client->cpf}}</td>
                        <td class="px-4 py-3">{{$client->plate}}</td>
                        <td class="px-4 py-3"><a href="{{ route('client', $client->id) }}">Ver mais</a></td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
