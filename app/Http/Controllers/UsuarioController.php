<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
class UsuarioController extends Controller
{



    public function verTodosUsuarios (Request $request){
    
        $listaUsuarios = User::all();
        return view('usuarios.tabelaAdmUsuario',['listaUsuarios'=> $listaUsuarios]);
    }


    
    public function verForm (Request $request){

        return view('usuarios.formUsuario');
    }

    // public function criarUsuario(Request $request){

    //     $novoUsuario = new User();
    //     $novoUsuario ->name = $request->nomeUsuario;
    //     $novoUsuario ->email = $request->emailUsuario;
    //     $novoUsuario ->password = Hash::make($request->senhaUsuario);

    //     $resultado=$novoUsuario->save();
    //      return view('usuarios.formUsuario', ["resultado"=>$resultado]);
    // }

    







}
