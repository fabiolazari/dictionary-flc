<h1>Cadastrar Línguas</h1>
<form action="{{ route('languages.store') }}" method="post">
    @csrf
    <input type="text" name="description" id="description" placeholder="Descrição">
    <button type="submit">Enviar</button>
</form>
