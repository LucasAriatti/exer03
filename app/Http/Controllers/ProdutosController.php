<?php

namespace App\Http\Controllers;

use App\Models\produto;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{

    function cadastro_novo()
    {
        return view('novo_produto');
    }


    function novo(Request $req)
    {
        //dd($req);
        $nomeProduto = $req->input('nomeProduto');
        $preco = $req->input('preco');
        $peso = $req->input('peso');


        $produto = new Produto();
        $produto->nomeProduto = $nomeProduto;
        $produto->preco       = $preco;
        $produto->peso        = $peso;

        $produto->save();
        return redirect()->route('produto_listar');
    }

    function listar()
    {

        $produto = produto::all();
        return  view('lista_produto', ['produto' => $produto]);
    }


    function alterar($id)
    {
        $produto = produto::findOrFail($id);

        return view('altera_produto', ['produto' => $produto]);
    }

    function salvar(Request $req)
    {
        $id = $req->input('id');
        $nomeProduto = $req->input('nomeProduto');
        $preco = $req->input('preco');
        $peso = $req->input('peso');


        $produto = produto::findOrFail($id);
        $produto->nomeProduto = $nomeProduto;
        $produto->preco = $preco;
        $produto->peso = $peso;


        $produto->save();

        return redirect()->route('produtos_listar');
    }

    function excluir($id)
    {
        $produto = produto::findOrFail($id);
        $produto->delete();

        return redirect()->route('produtos_listar');
    }
}
