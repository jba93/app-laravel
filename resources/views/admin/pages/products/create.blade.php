@extends('admin.layouts.app')

@section('title', 'Novo produto')

@section('content')
    <h1>Cadastrar novo produto</h1>

    <form action="{{route('products.store')}}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Nome">
        <input type="text" name="description" placeholder="Descrição">
        <button type="submit">Cadastrar</button>
    </form>
@endsection