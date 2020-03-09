<?php

namespace App\Http\Controllers;
use App\Product;

use Illuminate\Http\Request;

class ProductController extends Controller{



    public function verForm (Request $request){

        return view('produtos.formProduto');
    }
    
    public function verAdmProduto (Request $request){
        return view('produtos.tabelaAdmProduto');
    }

    public function verTodosProdutos(Request $request){

        $listaProdutos = Product::all();
        return view('produtos.tabelaAdmProduto',['listaProdutos'=> $listaProdutos]);
    }

    public function criarProduto(Request $request){

            // return 'Cadastrandoo ...'

            $novoProduto = new Product();
            $novoProduto ->nome = $request->nomeProduto;
            $novoProduto ->descricao = $request ->descricaoProduto;
            $novoProduto->preco = $request->precoProduto;
            $novoProduto->quantidade = $request->quantidadeProduto;
            $resultado = $novoProduto->save();

            if($resultado){
                echo "Deu certo arrombado";
            }else{
                echo"deu ruim";
            }

            return view ('produtos.formProduto', ["resultado"=>$resultado]);


    }










}
