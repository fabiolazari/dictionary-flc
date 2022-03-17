<h1>Cadastrar Sentenças</h1>

@if ($errors->any())
    <div>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </div>
@endif

<form action="{{ route('sentences.store') }}" method="post">
    @csrf
    <input type="text" name="description" id="description" placeholder="Descrição">
    <textarea name="meaning" id="meaning" rows="5" cols="33" placeholder="Significado" value="{{ old('meaning') }}"></textarea>
    <input type="text" name="language_id" id="language_id" placeholder="Língua">
    <button type="submit">Enviar</button>
</form>
