@extends('layouts.default')

@section('content')
    <section class="text-gray-600">
        <div class="container px-5 py-24 mx-auto">
            <div class="lg:w-2/4 w-full mx-auto overflow-auto">
                <div class="flex items-center justify-between mb-2">
                    <h1 class="text-2xl font-medium title-font mb-2 text-gray-900">Adicionar cliente</h1>
                </div>
                <form method="POST" action="{{ route('admin.client.create') }}">
                    @csrf
                    <div class="flex flex-wrap">
                        <div class="p-2 w-1/2">
                            <div class="relative">
                                <label for="name" class="leading-7 text-sm text-gray-600">Nome do cliente</label>
                                <input value="{{ old('name') }}" type="text" id="name" name="name" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                            @error('name')
                                <div class="text-red-400 text-sm">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="p-2 w-1/2">
                            <div class="relative">
                                <label for="phone" class="leading-7 text-sm text-gray-600">Telefone</label>
                                <input value="{{ old('phone') }}" type="text" id="phone" name="phone" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                            @error('phone')
                                <div class="text-red-400 text-sm">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="p-2 w-1/2">
                            <div class="relative">
                                <label for="cpf" class="leading-7 text-sm text-gray-600">CPF</label>
                                <input value="{{ old('cpf') }}" type="text" id="cpf" name="cpf" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                            @error('cpf')
                                <div class="text-red-400 text-sm">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="p-2 w-1/2">
                            <div class="relative">
                                <label for="plate" class="leading-7 text-sm text-gray-600">Placa do Carro</label>
                                <input value="{{ old('plate') }}" type="text" id="plate" name="plate" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                            @error('plate')
                                <div class="text-red-400 text-sm">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="p-2 w-full">
                            <button type="submit" class="flex ml-auto text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded">Adicionar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
