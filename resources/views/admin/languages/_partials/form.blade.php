@if ($errors->any())
<div>
    @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
</div>
@endif

@csrf

<input type="text" name="description" id="description" placeholder="Descrição" value ="{{ $language->description ?? old('description') }}">
<button type="submit">Enviar</button>
