<h1>Cadastrar Palavras</h1>
<form action="{{ route('words.store') }}" method="post">
    @csrf
    <input type="text" name="description" id="description" placeholder="Descrição">
    <input type="text" name="meaning" id="meaning" placeholder="Significado">
    <input type="text" name="note" id="note" placeholder="Observações">
    <input type="text" name="sentence_id" id="sentence_id" placeholder="Sentença">
    <input type="text" name="language_id" id="language_id" placeholder="Língua">
    <button type="submit">Enviar</button>
</form>
