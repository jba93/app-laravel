@extends('admin.layouts.app')

@section('title', 'Produtos')

<h1>Produtos</h1>

<a href="{{route('products.create')}}">Novo Produto</a>

@section('content')
    @if (isset($products))
        @foreach ($products as $product)
            <p>{{$product}}</p>
        @endforeach
    @endif
@endsection
