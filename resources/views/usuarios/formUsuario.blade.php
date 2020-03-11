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
      <form action="/usuarios/cadastrar" method="POST" enctype="">
      @csrf

      <div class="form-group">
        <label for="nomeUsuario">Nome do Usuario</label>
        <input class="form-control" type="text" name="nomeUsuario" id="nomeUsuario">
      </div>

      <div class="form-group">
        <label for="emailUsuario">Email do Usuario</label>
        <input class="form-control" type="text" name="emailUsuario" id="emailUsuario">
      </div>

      
      <div class="form-group">
        <label for="senhaUsuario">Senha do Usuario</label>
        <input class="form-control" type="text" name="emailUsuario" id="emailUsuario">
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