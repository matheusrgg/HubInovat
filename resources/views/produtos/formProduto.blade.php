@extends('layouts.app')

@section('content')



<section class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Cadastro de Produto</h1>        
        </div>
    </div>
      <form action="/produtos/cadastrar" method="POST" enctype="">
      @csrf

      <div class="form-group">
        <label for="nomeProduto">Nome do Produto</label>
        <input class="form-control" type="text" name="nomeProduto" id="nomeProduto">
      </div>

      <div class="form-group">
        <label for="descricaoProduto">Descrição</label>
        <textarea id="descricaoProduto" name="descricaoProduto" class="form-control"></textarea>
      </div>
      
      <div class="form-group">
        <label for="precoProduto">Preço do Produto</label>
        <input class="form-control" type="number" name="precoProduto"  id="precoProduto">
      </div>

    <div class="form-group">
        <label for="quantidadeProduto"> Quantidade do Produto</label>
        <input type="number" class="form-control" name="quantidadeProduto" id="quantidadeProduto">
    </div>

    <div class="form-group">
        <button class="btn btn-primary" type="submit">
            Cadastrar
        </button>
    </div>

    </form>

    
    <div class="row">
        <div class="col-md-12">
            @if(isset($result))
                @if($result)
                <h1>Deu certo irmão!!!!</h1>
                @else
                <h1>Não deu certo seu cadastro brother, se deu mal, foi sua culpa !</h1>
                @endif
            @endif
        </div>
    </div>

</section>

@endsection