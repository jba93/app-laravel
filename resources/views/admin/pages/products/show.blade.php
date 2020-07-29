@extends('admin.layouts.app')

@section('title', "Detalhes do produto {$product->id}")

@section('content')

<h1>Produto {{$product->id}}</h1>

<ul>
    <li><strong>Nome:</strong> {{$product->name}}</li>
    <li><strong>Descrição:</strong> {{$product->description}}</li>
    <li><strong>Preço:</strong> R${{$product->price}}</li>
</ul>

<a href="{{route('products.index')}}" class="btn btn-info">Voltar</a>
    
@endsection
