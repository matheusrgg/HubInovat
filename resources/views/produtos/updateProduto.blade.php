@extends('layouts.app')

@section('content')


<section class="container">
    <div class="row">
        <div class="col-md-12">
        <h1>Atualização do  Produto</h1>
        </div>
    </div>
@if(isset($product))
<form action="/produtos/atualizar" method="POST" enctype="">
        @csrf

        <input type="text" name="idProduct" value="{{$product->id}}" hidden>
        <div class="form-group">
          <label for="nomeProduto">Nome do Produto</label>
          <input class="form-control" type="text" name="nomeProduto" id="nomeProduto" value="{{$product->nome}}">
        </div>
  
        <div class="form-group">
          <label for="descricaoProduto">Descrição</label>
          <textarea id="descricaoProduto" name="descricaoProduto" class="form-control" value="{{$product->descricao}}"></textarea>
        </div>
        
        <div class="form-group">
          <label for="precoProduto">Preço do Produto</label>
          <input class="form-control" type="number" name="precoProduto"  id="precoProduto" value="{{$product->preco}}">
        </div>
  
      <div class="form-group">
          <label for="quantidadeProduto"> Quantidade do Produto</label>
          <input type="number" class="form-control" name="quantidadeProduto" id="quantidadeProduto" value="{{$product->quantidade}}">
      </div>
  
      <div class="form-group">
          <button class="btn btn-primary" type="submit">
              Atualizar
          </button>
      </div>
</form>

@elseif(isset($resultado))

@else
    <h1>Você não passou um id ou o produto não existe !</h1>
@endif
<div class="row">
    <div class="col-md-12">
        @if(isset($resultado))
            @if($resultado)
                <h1>Realizada com sucesso!</h1>
            @else
                <h1>Não deu certo a atualização, foi mal!</h1>
            @endif   
            @endif 
        </div>
</div>


</section>
@endsection