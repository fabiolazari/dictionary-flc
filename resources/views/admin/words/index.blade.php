<a href="{{ route('words.create') }}">Criar nova palavra</a>
<hr>
@if (session('message'))
    <div>
        {{ session('message') }}
    </div>
@endif

<h1>Words</h1>

@foreach ($words as $word)
    <p>
        {{$word->description}} - {{$word->meaning}} - {{$word->note}} - {{$word->language_id}} - {{$word->sentence_id}}
        [ <a href="{{ route('words.show', $word->id) }}">Ver</a> ]
    </p>
@endforeach
