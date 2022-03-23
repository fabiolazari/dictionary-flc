@extends('admin.layouts.app')

@section('title','Edição dos dados de língua')

@section('content')

<h1>Editar Língua <strong>{{ $language->description }}</strong></h1>

<form action="{{ route('languages.update', $language->id) }}" method="post" enctype="multipart/form-data">
    @method('put')
    <img src="{{ url("storage/{$language->flag}") }}" alt="{{ $language->description }}" style="max-width: 50px;">
    @include('admin.languages._partials.form')
</form>

@endsection
