<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Product;
use App\User;
use Auth;

class ProductController extends Controller{
    public $nome;


    public function verForm (Request $request){

        return view('produtos.formProduto');
    }
    
   public function verDashboard(Request $request){
            return view('dashboard');
    
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
            $novoProduto->user_id = Auth::user()->id;
            $resultado = $novoProduto->save();

            if($resultado){
                echo "Seu Cadastro foi um SUCESSO ! ";
            }else{
                echo"deu ruim";
            }

            return view ('produtos.formProduto', ["resultado"=>$resultado]);
    }
    
          public function deletarProduto(Request $request, $id=0){
            // para deletar vc vai usar Product::destroy($id)
            $produto = Product::find($id);
           $resultado =  Product::destroy($id);
    
           if($resultado){
               return redirect('/produtosAdm');
           }
        }

    public function verUpdateProduto(Request $request, $id){
   
        $product = Product::find($id);
        if($product){
            return view('produtos.updateProduto',['product'=>$product]);  
        }else {
            return view('produtos.updateProduto');
        }      


    }
    
    public function updateProduto (Request $request){

        $product = Product::find($request->idProduct);
        $product->nome = $request->nomeProduto;
        $product->descricao = $request->descricaoProduto;
        $product->quantidade = $request->quantidadeProduto;
        $product->preco = $request->precoProduto;
        $resultado = $product->save();
  
        return view('produtos.updateProduto', ["resultado"=>$resultado]);
      }
      
    }















