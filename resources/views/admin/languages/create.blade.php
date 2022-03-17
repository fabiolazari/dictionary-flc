<h1>Cadastrar Línguas</h1>

@if ($errors->any())
    <div>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </div>
@endif

<form action="{{ route('languages.store') }}" method="post">
    @csrf
    <input type="text" name="description" id="description" placeholder="Descrição">
    <button type="submit">Enviar</button>
</form>
