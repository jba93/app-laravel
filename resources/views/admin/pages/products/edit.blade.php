@extends('admin.layouts.app')

@section('title', 'Editar produto')

@section('content')
    <h1>Editar Produto {{$product->id}}</h1>

    @include('admin.includes.alerts')

    <form action="{{route('products.update', $product->id)}}" method="POST" enctype="multipart/form-data" class="form">
        @method("PUT")
        @include('admin.pages.products._partials.form')  
    </form>
@endsection