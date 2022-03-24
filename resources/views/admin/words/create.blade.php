@extends('admin.layouts.app')

@section('title','Cadastro de palavra')

@section('content')

    <h1 class="text-center text-3x1 uppercase font-black my-4">Cadastrar Palavras</h1>

    <div class="w-11/12 p-12 bg-white sm:w-8/12 md:w-1/2 lg:w-5/12 mx-auto">
        <form action="{{ route('words.store') }}" method="post">
            @include('admin.words._partials.form')
        </form>
    </div>

@endsection
