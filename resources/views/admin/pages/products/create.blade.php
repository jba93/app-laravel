@extends('admin.layouts.app')

@section('title', 'Novo produto')

@section('content')
    <h1>Cadastrar Novo Produto</h1>
    
    @include('admin.includes.alerts')

    <form action="{{route('products.store')}}" method="POST" enctype="multipart/form-data" class="form">
        @csrf
        <div class="form-group">            
            <input type="text" name="name" placeholder="Nome" value="{{ old('name') }}" class="form-control">
        </div>
        <div class="form-group"> 
            <input type="text" name="description" placeholder="Descrição" value="{{ old('description') }}" class="form-control">
        </div>
        <div class="form-group"> 
            <input type="text" name="price" placeholder="Preço" value="{{ old('price') }}" class="form-control">
        </div>
        <div class="form-group"> 
            <input type="file" name="image" class="form-control">
        </div>
        <div class="form-group"> 
            <button type="submit" class="btn btn-success">Cadastrar</button>            
        </div>  
    </form>      
@endsection