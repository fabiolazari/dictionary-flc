<a href="{{ route('languages.create') }}">Criar nova língua</a>
<hr>
@if (session('message'))
    <div>
        {{ session('message') }}
    </div>
@endif

<h1>Languages</h1>
@foreach ($languages as $language)
    <p>
        {{$language->id}} - {{$language->description}}
        [ <a href="{{ route('languages.show', $language->id) }}">Ver</a> ] |
        [ <a href="{{ route('languages.edit', $language->id) }}">Edit</a> ]
    </p>
@endforeach
