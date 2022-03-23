@if ($errors->any())
<div>
    @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
</div>
@endif

@csrf
<input type="text" name="description" id="description" placeholder="Descrição" value="{{ $sentence->description ?? old('description') }}">
<textarea name="meaning" id="meaning" rows="5" cols="33" placeholder="Significado">{{ $sentence->meaning ?? old('meaning') }}</textarea>
<input type="text" name="language_id" id="language_id" placeholder="Língua" value="{{ $sentence->language_id ?? old('language_id') }}">
<button type="submit">Enviar</button>
