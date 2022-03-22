@extends('admin.layouts.app')

@section('title','Listagem das línguas')

@section('content')

<a href="{{ route('languages.create') }}">Criar nova língua</a>
<hr>
@if (session('message'))
    <div>
        {{ session('message') }}
    </div>
@endif

<form action="{{ route('languages.search') }}" method="post">
    @csrf
    <input type="text" name="search" placeholder="Pesquisar">
    <button type="submit">Filtrar</button>
</form>

<h1>Línguas</h1>

@foreach ($languages as $language)
    <p>
        {{$language->id}} - {{$language->description}}
        [ <a href="{{ route('languages.show', $language->id) }}">Ver</a> ] |
        [ <a href="{{ route('languages.edit', $language->id) }}">Edit</a> ]
    </p>
@endforeach

<hr>
@if (isset($filters))
    {{ $languages->appends($filters)->links() }}
@else
    {{ $languages->links() }}
@endif

@endsection