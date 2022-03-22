@extends('admin.layouts.app')

@section('title','Cadastro de Sentença')

@section('content')

<h1>Cadastrar Sentenças</h1>

<form action="{{ route('sentences.store') }}" method="post">
    @include('admin.sentences._partials.form')
</form>

@endsection
