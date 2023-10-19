<h1>Cadastro de produtos</h1>

<form action="{{route('products.')}}" METHOD="POST">
    @csrf
<div>
    <label>Nome do Produto:</label>
    <input type="text" name="nome">
</div>
<div>
    <label>Descrição:</label>
    <input type="text" name="descricao">
</div>

<div>
    <label>Valor:</label>
    <input type="text" name="preco">
</div>

<div>
    <select name="category_id">
    @foreach ($categories as $category)
    <option value="{{$category->id}}"> {{$category->nome}}</option>
    @endforeach
</select>
</div>
<button type="submit">Salvar</button>
</form>


