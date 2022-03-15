<a href="{{ route('sentences.create') }}">Criar nova sentença</a>

<h1>Sentences</h1>
@foreach ($sentences as $sentence)
    <p>{{$sentence->description}} - {{$sentence->meaning}} - {{$sentence->language_id}}</p>
@endforeach
