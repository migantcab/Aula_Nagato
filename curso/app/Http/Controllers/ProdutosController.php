<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function index(){
        $produtos = \App\Produtos::get(); // pegou da MODEL produtos 
        return view('produto.index', ['produtos' => $produtos]);
        return $produtos;

    }
    public function criarProduto(){
        return view('produto.cadastro');
    //,
    }
    public function criaProduto(Request $request){
        $produto = new \App\Produtos();

        // 'codigo','nome','qt', 'preco_unitario'

        $produto->codigo = $request ->codigo;
        $produto->nome= $request ->nome;
        $produto->qt = $request ->qt;
        $produto->preco_unitario = $request ->preco_unitario;

        $produto->save();
        return redirect('/produtos');

    }

    public function atualizarProduto($_id){
        $produto = \App\Produtos::where('_id', $_id)->first();
        
        return view('produto.atualiza', ['produto' => $produto]);
    }

    public function atualizaProduto(Request $request){
        $produto = \App\Produtos::where('_id', $request->_id)->first();
        if(!empty($produto)){


            $produto->codigo = $request->codigo;
            $produto->nome= $request->nome;
            $produto->qt= $request->qt;
            $produto->preco_unitario= $request->preco_unitario;
            
            $produto->save();
        }
        
        return redirect('/produtos');
    }

    public function deletarProduto($codigo){

                $produto = \App\Produtos::where('_id',$codigo)->first();
        $produto->delete();


        return redirect('/produtos');
    }
}
