<h1>Cadastrar Sentenças</h1>
<form action="{{ route('sentences.store') }}" method="post">
    @csrf
    <input type="text" name="description" id="description" placeholder="Descrição">
    <input type="text" name="meaning" id="meaning" placeholder="Significado">
    <input type="text" name="language_id" id="language_id" placeholder="Língua">
    <button type="submit">Enviar</button>
</form>
