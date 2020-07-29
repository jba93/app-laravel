@extends('admin.layouts.app')

@section('title', 'Editar produto')

@section('content')
    <h1>Editar Produto {{$product->id}}</h1>

    @include('admin.includes.alerts')

    <form action="{{route('products.update', $product->id)}}" method="POST" enctype="multipart/form-data" class="form">
        @csrf
        @method("PUT")
        <div class="form-group">            
            <input type="text" name="name" placeholder="Nome" value="{{ $product->name }}" class="form-control">
        </div>
        <div class="form-group"> 
            <input type="text" name="description" placeholder="Descrição" value="{{$product->description}}" class="form-control">
        </div>
        <div class="form-group"> 
            <input type="text" name="price" placeholder="Preço" value="{{$product->price}}" class="form-control">
        </div>
        <div class="form-group"> 
            <input type="file" name="image" class="form-control">
        </div>
        <div class="form-group"> 
            <a href="{{route('products.index')}}" class="btn btn-info">Voltar</a>
            <button type="submit" class="btn btn-success">Editar</button>            
        </div>  
    </form>
@endsection