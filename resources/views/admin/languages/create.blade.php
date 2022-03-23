@extends('admin.layouts.app')

@section('title','Cadastro de língua')

@section('content')

<h1>Cadastrar Línguas</h1>

<form action="{{ route('languages.store') }}" method="post" enctype="multipart/form-data">
    @include('admin.languages._partials.form')
</form>

@endsection
