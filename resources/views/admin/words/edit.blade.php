<h1>Editar Palavra <strong>{{ $word->description }}</strong></h1>

@if ($errors->any())
    <div>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </div>
@endif

<form action="{{ route('words.update', $word->id) }}" method="post">
    @csrf
    @method('put')
    <input type="text" name="description" id="description" placeholder="Descrição" value="{{ $word->description }}">
    <textarea name="meaning" id="meaning" rows="5" cols="33" placeholder="Significado">{{ $word->meaning }}</textarea>
    <textarea name="note" id="note" rows="5" cols="33" placeholder="Observações">{{ $word->note }}</textarea>
    <input type="text" name="sentence_id" id="sentence_id" placeholder="Sentença" value="{{ $word->sentence_id }}">
    <input type="text" name="language_id" id="language_id" placeholder="Língua" value="{{ $word->language_id }}">
    <button type="submit">Enviar</button>
</form>
