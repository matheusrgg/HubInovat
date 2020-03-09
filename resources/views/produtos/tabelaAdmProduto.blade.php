@extends('layouts.app')

@section('content')


<main>
    <!--- INÍCIO da Lista Geral de Produtos --->

    <div class="row text-center container-fluid pb-3">
        <div class="col-md-12">
          <h1 class="text-success mt-2"><b>Lista de Produtos</b></h1>
        </div>
    </div>
    
    <div class="col-md-12">
        <table class="table-bordered table-striped w-100">

          <thead class="text-center">
            <tr>

              <th scope="col">#</th>
              <th scope="col">Nome</th>
            
              <th scope="col">Descrição</th>              
              <th scope="col">Preço </th>
              <th scope="col">Quantidade</th>
          
              <th scope="col">Data do Cadastro</th>
              <th scope="col">Data da Atualização</th>
              
              <th scope="col" class="">Ações <br> <a class="btn btn-warning btn-sm mb-1" href="/produtos/cadastrar">&nbsp; CADASTRAR &nbsp;&nbsp;</a></th>

            </tr>
          </thead>

          <tbody class="text-center" >

            @forelse($listaProdutos as $product)
                <tr>
                  <th scope="row">{{$product->id}}</th>
                      <td>{{$product->nome}}</td>
                  
                      <td>{{$product->descricao}}</td>
                      <td>R${{$product->preco}}</td>
                      <td>{{$product->quantidade}}</td>  
                    
                      <td>{{$product->created_at}}</td>
                      <td>{{$product->updated_at}}</td>

                      <td class="w-25">
                          <a class="btn btn-secondary btn-sm mb-1 mt-1" href="#">&nbsp; Desativar&nbsp;&nbsp;</a> 
                          <a class="btn btn-primary btn-sm mb-1 mt-1" href="">&nbsp; Editar&nbsp;&nbsp;</a>
              
                          <a class="btn btn-danger btn-sm" href="">Apagar</a>
                      </td>
                  </tr>

                  @empty
                    <h1>Não tem produtos cadastrados</h1>

                @endforelse

          </tbody>

        </table>

    </div>
 

   </main>



@endsection