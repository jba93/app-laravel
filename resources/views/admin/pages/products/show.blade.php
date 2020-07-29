@extends('admin.layouts.app')

@section('title', "Detalhes do produto {$product->id}")

@section('content')

<h1>Produto {{$product->id}}</h1>

<form action="{{route('products.destroy', $product->id)}}" method="post">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">Excluir</button>
</form>

<ul>
    <li><strong>Nome:</strong> {{$product->name}}</li>
    <li><strong>Descrição:</strong> {{$product->description}}</li>
    <li><strong>Preço:</strong> R${{$product->price}}</li>
</ul>

<a href="{{route('products.index')}}" class="btn btn-info">Voltar</a>
    
@endsection
