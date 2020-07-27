@extends('admin.layouts.app')

@section('title', 'Editar produto')

@section('content')
    <h1>Editar Produto {{$id}}</h1>

    <form action="{{route('products.update', $id)}}" method="POST">
        @csrf
        @method("PUT")
        <input type="text" name="name" placeholder="Nome">
        <input type="text" name="description" placeholder="Descrição">
        <button type="submit">Editar</button>
    </form>
@endsection