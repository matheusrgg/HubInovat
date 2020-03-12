@extends('layouts.app')

@section('content')



<section class="container">
    <div class="row">
        <a class="btn btn-secondary" href="/usuariosAdm">
            Voltar
        </a>
        <div class="col-md-12">
            <h1>Cadastro de Usuario</h1>        
        </div>
    </div>


       <!--aqui começa o formulário -->  


       <form action="/usuarios/cadastrar" method="POST" enctype="">
  
  @csrf



  <div class="form-group">
    <label for="nomeUsuario">Nome do Usuario</label>
    <input name="nomeUsuario" value="{{ old("name", '') }}" type="text" class="form-control " id="nomeUsuario" placeholder="Nome">
  </div>

  <div class="form-group">
    <label for="emailUsuario">Email do Usuario</label>
    <input name="emailUsuario" value="{{ old("email", '') }}" type="email" class="form-control " id="emailUsuario" placeholder="seunome@email.com">
  </div>

  
  <div class="form-group">
    <label for="senhaUsuario">Senha do Usuario</label>
    <input name="senhaUsuario" value="{{ old("senhaUsuario", '') }}" type="password" class="form-control" id="senhaUsuario" placeholder="Digite uma senha, mínimo 6 caracteres">
  </div>

  <div class="form-group">
    <label for="senhaUsuario">Confirma Senha do Usuario</label>
    <input name="senhaConfirmUsuario" value="{{ old("senhaConfirmUsuario", '') }}" type="password" class="form-control " id="senhaConfirmUsuario" placeholder="Confirme a senha">
  </div> 
  

<div class="form-group">
    <button class="btn btn-primary" type="submit">
        Cadastrar
    </button>
</div>

</form>





</section>








@endsection