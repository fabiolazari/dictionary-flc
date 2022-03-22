@extends('admin.layouts.app')

@section('title','Edição dos dados de palavra')

@section('content')

<h1>Editar Palavra <strong>{{ $word->description }}</strong></h1>

<form action="{{ route('words.update', $word->id) }}" method="post">
    @method('put')
    @include('admin.words._partials.form')
</form>

@endsection
