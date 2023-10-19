<h1>{{$product -> nome}} - {{$product->preco}}</h1>
<a href="{{route('products.edit',$product->id)}}">Editar</a>
<form action="{{route('products.destroy',$product->id)}}" method="POST">
    @method('DELETE')
    @csrf
    <button type="submit">Delete</button>
</form>
<p>{{$product->descricao}}</p>
<p>{{$product->Category->nome}}