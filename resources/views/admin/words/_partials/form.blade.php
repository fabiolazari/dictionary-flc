@if ($errors->any())
    <div>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </div>
@endif

@csrf

<input type="text" name="description" id="description" placeholder="Descrição" value="{{ $word->description ?? old('description') }}">
<textarea name="meaning" id="meaning" rows="5" cols="33" placeholder="Significado">{{ $word->meaning ?? old('meaning') }}</textarea>
<textarea name="note" id="note" rows="5" cols="33" placeholder="Observações">{{ $word->note ?? old('note') }}</textarea>
<input type="text" name="sentence_id" id="sentence_id" placeholder="Sentença" value="{{ $word->sentence_id ?? old('sentence_id') }}">
<input type="text" name="language_id" id="language_id" placeholder="Língua" value="{{ $word->language_id ??  old('language_id') }}">
<button type="submit">Enviar</button>
