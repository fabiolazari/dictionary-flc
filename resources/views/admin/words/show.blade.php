<h1>Detalhes da palavra {{ $word->id }}</h1>

<ul>
    <li><strong>Descrição: </strong>{{ $word->description }}</li>
    <li><strong>Significado: </strong>{{ $word->meaning }}</li>
    <li><strong>Notas: </strong>{{ $word->note }}</li>
    <li><strong>Sentença: </strong>{{ $word->sentence_id }}</li>
    <li><strong>Língua: </strong>{{ $word->language_id }}</li>
</ul>

<form action="{{ route('words.destroy', $word->id) }}" method="post">
    @csrf
    <input type="hidden" name="_method" value="DELETE">
    <button type="submit">Deletar</button>
</form>
