<h1>Detalhes da língua {{ $language->id }}</h1>

<ul>
    <li><strong>Descrição: </strong>{{ $language->description }}</li>
</ul>

<form action="{{ route('languages.destroy', $language->id) }}" method="post">
    @csrf
    <input type="hidden" name="_method" value="DELETE">
    <button type="submit">Deletar</button>
</form>
