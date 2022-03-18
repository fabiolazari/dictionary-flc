<h1>Editar Sentença <strong>{{ $sentence->description }}</strong></h1>

@if ($errors->any())
    <div>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </div>
@endif

<form action="{{ route('sentences.update', $sentence->id) }}" method="post">
    @csrf
    @method('put')
    <input type="text" name="description" id="description" placeholder="Descrição" value="{{ $sentence->description }}">
    <textarea name="meaning" id="meaning" rows="5" cols="33" placeholder="Significado">{{ $sentence->meaning }}</textarea>
    <input type="text" name="language_id" id="language_id" placeholder="Língua" value="{{ $sentence->language_id }}">
    <button type="submit">Enviar</button>
</form>
