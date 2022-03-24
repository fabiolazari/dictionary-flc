@extends('admin.layouts.app')

@section('title','Consulta dos dados de palavra')

@section('content')

    <h1 class="text-center text-3xl uppercase font-black my-4">Detalhes da palavra {{ $word->description }}</h1>

    <div class="w-11/12 p-12 bg-white sm:w-8/12 md:w-1/2 lg:w-5/12 mx-auto">
        <ul>
            <li><strong>Descrição: </strong>{{ $word->description }}</li>
            <li><strong>Significado: </strong>{{ $word->meaning }}</li>
            <li><strong>Notas: </strong>{{ $word->note }}</li>
            <li><strong>Sentença: </strong>{{ $word->sentence_id }}</li>
            <li><strong>Língua: </strong>{{ $word->language_id }}</li>
        </ul>

        <form action="{{ route('words.destroy', $word->id) }}" method="post">
            @csrf
            <input type="hidden" name="_method" value="DELETE">
            <button type="submit" class="w-full py-3 mt-6 font-medium tracking-widest text-white uppercase bg-red-500 shadow-lg focus:outline-none hover:bg-red-900 hover:shadow-none">Deletar</button>
        </form>
    </div>

@endsection
