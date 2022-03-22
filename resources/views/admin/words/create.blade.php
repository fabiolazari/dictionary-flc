@extends('admin.layouts.app')

@section('title','Cadastro de palavra')

@section('content')

<h1>Cadastrar Palavras</h1>

@if ($errors->any())
    <div>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </div>
@endif

<form action="{{ route('words.store') }}" method="post">
    @include('admin.words._partials.form')
</form>

@endsection
