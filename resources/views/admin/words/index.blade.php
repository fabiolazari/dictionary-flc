@extends('admin.layouts.app')

@section('title','Listagem das palavras')

@section('content')

<h1 class="text-center text-3xl uppercase font-black my-4">Palavras</h1>

<div class="grid">
    <a href="{{ route('words.create') }}" class="my-4 uppercase px-8 py-2 rounded bg-green-600 text-blue-50 max-w-max shadow-sm hover:shadow-lg">Nova palavra</a>
</div>

@if (session('message'))
    <div class="flex justify-center items-center m-1 font-medium py-1 px-2 bg-white rounded-md text-green-700 bg-green-100 border border-green-300 ">
        {{ session('message') }}
    </div>
@endif

<form action="{{ route('words.search') }}" method="post" class="bg-white">
    @csrf
    <div class="max-w-sm my-4 p-1 pr-0 flex items-center">
        <input type="text" name="search" placeholder="Pesquisar" class="flex-1 appearance-none rounded shadow p-3 text-grey-dark mr-2 focus:outline-none">
        <button type="submit" class="uppercase p-3 rounded bg-blue-500 text-blue-50 max-w-max shadow-sm hover:shadow-lg">Filtrar</button>
    <div>
</form>

<table class="min-w-full bg-white">
    <thead>
        <tr>
            <th class="px-6 py-3 border-b-2 border-gray-300 text-left leading-4 text-blue-500 tracking-wider">Descrição</th>
            <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">Significado</th>
            <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">Observações</th>
            <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">Língua</th>
            <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">Sentença</th>
            <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider"></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($words as $word)
            <tr>
                <td class="px-6 py-4 whitespace-no-wrap border-b text-blue-900 border-gray-500 text-sm leading-5">{{ $word->description }}</td>
                <td class="px-6 py-4 whitespace-no-wrap border-b text-blue-900 border-gray-500 text-sm leading-5">{{ $word->meaning }}</td>
                <td class="px-6 py-4 whitespace-no-wrap border-b text-blue-900 border-gray-500 text-sm leading-5">{{ $word->note }}</td>
                <td class="px-6 py-4 whitespace-no-wrap border-b text-blue-900 border-gray-500 text-sm leading-5">{{ $word->language_id }}</td>
                <td class="px-6 py-4 whitespace-no-wrap border-b text-blue-900 border-gray-500 text-sm leading-5">{{ $word->sentence_id }}</td>
                <td class="px-6 py-4 whitespace-no-wrap border-b text-blue-900 border-gray-500 text-sm leading-5 text-right">
                    <a href="{{ route('words.show', $word->id) }}" class="px-5 py-2 border-blue-500 border text-blue-500 rounded transition duration-300 hover:bg-blue-700 hover:text-white focus:outline-none">Ver</a>
                    <a href="{{ route('words.edit', $word->id) }}" class="px-5 py-2 border-green-500 border text-green-500 rounded transition duration-300 hover:bg-green-700 hover:text-white focus:outline-none">Edit</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<div class="my-4">
    @if (isset($filters))
        {{ $words->appends($filters)->links() }}
    @else
        {{ $words->links() }}
    @endif
</div>

@endsection
