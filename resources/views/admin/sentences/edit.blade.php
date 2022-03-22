@extends('admin.layouts.app')

@section('title','Edição dos dados de sentença')

@section('content')

<h1>Editar Sentença <strong>{{ $sentence->description }}</strong></h1>

<form action="{{ route('sentences.update', $sentence->id) }}" method="post">
    @method('put')
    @include('admin.sentences._partials.form')
</form>

@endsection
