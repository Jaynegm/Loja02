<!DOCTYPE html>
<html>
<head>
    <title>Editar</title>
</head>
<body>
    <h1>Editar dados:</h1>

<form action="{{route('products.update', $product->id)}}" METHOD="POST">
    @method ("PUT")
    @csrf
<div>
    <label>Nome do Produto:</label>
    <input type="text" name="nome" value="{{$product->nome}}">
</div>
<div>
    <label>Descrição:</label>
    <input type="text" name="descricao" value="{{$product->descricao}}">
</div>

<div>
    <label>Valor:</label>
    <input type="text" name="preco" value="{{$product->preco}}">
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
</body>
</html>