<h1>Detalhes da sentença {{ $sentence->id }}</h1>

<ul>
    <li><strong>Descrição: </strong>{{ $sentence->description }}</li>
    <li><strong>Significado: </strong>{{ $sentence->meaning }}</li>
    <li><strong>Língua: </strong>{{ $sentence->language_id }}</li>
</ul>

<form action="{{ route('sentences.destroy', $sentence->id) }}" method="post">
    @csrf
    <input type="hidden" name="_method" value="DELETE">
    <button type="submit">Deletar</button>
</form>
