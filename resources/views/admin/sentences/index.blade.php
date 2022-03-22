@extends('admin.layouts.app')

@section('title','Listagem das sentenças')

@section('content')

<a href="{{ route('sentences.create') }}">Criar nova sentença</a>
<hr>
@if (session('message'))
    <div>
        {{ session('message') }}
    </div>
@endif

<form action="{{ route('sentences.search') }}" method="post">
    @csrf
    <input type="text" name="search" placeholder="Pesquisar">
    <button type="submit">Filtrar</button>
</form>

<h1>Sentenças</h1>

@foreach ($sentences as $sentence)
    <p>
        {{$sentence->description}} - {{$sentence->meaning}} - {{$sentence->language_id}}
        [ <a href="{{ route('sentences.show', $sentence->id) }}">Ver</a> ] |
        [ <a href="{{ route('sentences.edit', $sentence->id) }}">Edit</a> ]
    </p>
@endforeach

<hr>
@if (isset($filters))
    {{ $sentences->appends($filters)->links() }}
@else
    {{ $sentences->links() }}
@endif

@endsection
