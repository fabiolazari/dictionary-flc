<h1>Editar Língua <strong>{{ $language->description }}</strong></h1>

@if ($errors->any())
    <div>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </div>
@endif

<form action="{{ route('languages.update', $language->id) }}" method="post">
    @csrf
    @method('put')
    <input type="text" name="description" id="description" placeholder="Descrição" value ="{{ $language->description }}">
    <button type="submit">Enviar</button>
</form>
