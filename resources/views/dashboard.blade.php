@extends('layouts.app')

@section('content')

<section>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
</section>







<div class="container">

   
    
    <h1 style="
    margin-top: 50px;
    margin-bottom: 90px;
    text-align:center;">DASHBOARD</h1>


    <div class="row">
    <div class="col-lg-6">
            <!-- Cartãoo PRODUTOS --->
            <div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Painel de Produtos</h5>
    <p class="card-text">Acompanhe as operações e acesse diversas informações importantes.</p>
    <a href="/produtosAdm" class="btn btn-primary">Produtos</a>
  </div>
</div>

            <!-- FINAL   Cartãoo  --->
    </div>
    
    <div class="col-lg-6">
            <!-- Cartãoo USUARIOS --->
            <div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Painel de Usuários</h5>
    <p class="card-text">Acompanhe as operações e acesse diversas informações importantes.</p>
    <a href="#" class="btn btn-primary">Usuários</a>
  </div>
</div>


            <!-- FINAL USUARIOS --->
    
    
    </div>
            

    </div>


</div>



@endsection