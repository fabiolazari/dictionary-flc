@extends('admin.layouts.app')

@section('title','Edição dos dados de língua')

@section('content')

<h1>Editar Língua <strong>{{ $language->description }}</strong></h1>

<form action="{{ route('languages.update', $language->id) }}" method="post">
    @method('put')
    @include('admin.languages._partials.form')
</form>

@endsection
