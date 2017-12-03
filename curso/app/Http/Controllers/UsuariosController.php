<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function index(){
        $usuario = \App\User::get();
        return view('usuario.index', ['usuarios' => $usuario]);
        return $usuario;

    }
    public function criarUsuario(){
        return view('usuario.cadastro');
    //,
    }
    public function criaUsuario(Request $request){
        $usuario = new \App\User();
        $usuario->name = $request ->nome;
        $usuario->email= $request ->email;
        $usuario->password = $request ->senha;
        $usuario->save();
        return redirect('/users');

    }

    public function atualizarUsuario($id){
        $usuario = \App\User::where('id', $id)->first();
        
        return view('usuario.atualiza', ['usuario' => $usuario]);
    }

    public function atualizaUsuario(Request $request){
        $usuario = \App\User::where('id', $request->id)->first();
        if(!empty($usuario)){
            $usuario->name = $request->nome;
            $usuario->email= $request->email;
            $usuario->save();
        }
        
        return redirect('/users');
    }

    public function deletarUsuario($id){
        $usuario = \App\User::where('id', $id)->first();
        $usuario->delete();
        return redirect('/users');
    }

    public function enviarUsuario($id){

        $usuario = \App\User::where('id', $id)->first();
        //aqui devo colocar comando que envia $usuario para a API do Nagato,
        // mas somente os dois primeiros parametros e não o password.

        $url="http://laraapi.jelasticlw.com.br/api/company";

        $temp= [
            'company_name' => $usuario->name,
            'company_email' => $usuario->email
        ];
        
        $data = json_encode($temp);
        
        $empresa=\App\Helper\WebRequest::postData($url,$data);

        $usuario->token = $empresa->company_token;;
        $usuario->sv_id = $empresa->_id;

        $usuario->save();

        
        return redirect('/users');
    }





}
