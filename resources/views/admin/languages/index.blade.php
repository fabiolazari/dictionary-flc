<a href="{{ route('languages.create') }}">Criar nova língua</a>

<h1>Languages</h1>
@foreach ($languages as $language)
    <p>{{$language->id}} - {{$language->description}}</p>
@endforeach
