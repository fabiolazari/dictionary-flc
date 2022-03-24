@extends('admin.layouts.app')

@section('title','Edição dos dados de palavra')

@section('content')

    <h1 class="text-center text-3xl uppercase font-black my-4">Editar palavra<strong>{{ $word->description }}</strong></h1>

    <div class="w-11/12 p-12 bg-white sm:w-8/12 md:w-1/2 lg:w-5/12 mx-auto">
        <form action="{{ route('words.update', $word->id) }}" method="post">
            @method('put')
            @include('admin.words._partials.form')
        </form>
    </div>

@endsection
