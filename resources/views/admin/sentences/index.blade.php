<a href="{{ route('sentences.create') }}">Criar nova sentença</a>
<hr>
@if (session('message'))
    <div>
        {{ session('message') }}
    </div>
@endif

<h1>Sentences</h1>
@foreach ($sentences as $sentence)
    <p>
        {{$sentence->description}} - {{$sentence->meaning}} - {{$sentence->language_id}}
        [ <a href="{{ route('sentences.show', $sentence->id) }}">Ver</a> ]
    </p>
@endforeach
