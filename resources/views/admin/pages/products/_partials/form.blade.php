@include('admin.includes.alerts')

@csrf
<div class="form-group">            
    <input type="text" name="name" placeholder="Nome" value="{{ $product->name ?? old('name') }}" class="form-control">
</div>
<div class="form-group"> 
    <input type="text" name="description" placeholder="Descrição" value="{{ $product->description ?? old('description') }}" class="form-control">
</div>
<div class="form-group"> 
    <input type="text" name="price" placeholder="Preço" value="{{ $product->price ?? old('price') }}" class="form-control">
</div>
<div class="form-group"> 
    <input type="file" name="image" class="form-control">
</div>
<div class="form-group"> 
    <a href="{{route('products.index')}}" class="btn btn-info">Voltar</a>
    <button type="submit" class="btn btn-success">Salvar</button>            
</div>