<h1>Cadastrar Palavras</h1>

@if ($errors->any())
    <div>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </div>
@endif

<form action="{{ route('words.store') }}" method="post">
    @csrf
    <input type="text" name="description" id="description" placeholder="Descrição" value="{{ old('description') }}">
    <textarea name="meaning" id="meaning" rows="5" cols="33" placeholder="Significado">{{ old('meaning') }}</textarea>
    <textarea name="note" id="note" rows="5" cols="33" placeholder="Observações">{{ old('note') }}</textarea>
    <input type="text" name="sentence_id" id="sentence_id" placeholder="Sentença" value="{{ old('sentence_id') }}">
    <input type="text" name="language_id" id="language_id" placeholder="Língua" value="{{ old('language_id') }}">
    <button type="submit">Enviar</button>
</form>
