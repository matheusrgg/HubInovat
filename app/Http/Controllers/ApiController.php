<?php

namespace App\Http\Controllers;
use App\Product;
use App\Http\Resources\Product as ProductResource;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    
    public function store(Request $request){

            $novoProduto = new Product;
            $novoProduto ->nome = $request->input('nome');
            $novoProduto ->descricao = $request ->input('descricao');
            $novoProduto->preco = $request->input('preco');
            $novoProduto->quantidade = $request->input('quantidade');
            
            $novoProduto->save();
            //used for retrieving
            // return StudentResource::collection($novoProduto);
    
            return new ProductResource($novoProduto);
    
        }


    public function show(Request $request){

        $produtos= Product::all();
        return ProductResource::collection($produtos);

    }

    public function showbyid($id){

        $produto = Product::find($id);
        if($produto){
            
            return new ProductResource($produto); 
        }else{
            return response()->json(['Error'=>'There is no data available on this id:'.$id.' '], 404);
        }
    }

    public function update(Request $request, $id){


        $produto = Product::find($id);

        if($produto){

        $produto ->nome = $request->input('nome');  
        $produto ->descricao = $request ->input('descricao');
        $produto->preco = $request->input('preco');
        $produto->quantidade = $request->input('quantidade');
        $produto->save();
        return new ProductResource($produto);

        }else{
            return response()->json(['Error'=>'There is no data available on this id:'.$id.' '], 404);
        }

    }


    public function delete($id){

        $produto = Product::find($id);

        if($produto){
            $produto->delete();
            return new ProductResource($produto);
        }else{
            return response()->json(['Error'=>'There is no ID available to DELETE id:'.$id.' '], 404);
        }

    }

    
}
