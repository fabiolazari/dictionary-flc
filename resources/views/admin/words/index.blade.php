@extends('admin.layouts.app')

@section('title','Listagem das palavras')

@section('content')

<a href="{{ route('words.create') }}">Criar nova palavra</a>
<hr>
@if (session('message'))
    <div>
        {{ session('message') }}
    </div>
@endif

<form action="{{ route('words.search') }}" method="post">
    @csrf
    <input type="text" name="search" placeholder="Pesquisar">
    <button type="submit">Filtrar</button>
</form>

<h1>Palavras</h1>

@foreach ($words as $word)
    <p>
        {{$word->description}} - {{$word->meaning}} - {{$word->note}} - {{$word->language_id}} - {{$word->sentence_id}}
        [ <a href="{{ route('words.show', $word->id) }}">Ver</a> ] |
        [ <a href="{{ route('words.edit', $word->id) }}">Edit</a> ]
    </p>
@endforeach

<hr>
@if (isset($filters))
    {{ $words->appends($filters)->links() }}
@else
    {{ $words->links() }}
@endif

@endsection
