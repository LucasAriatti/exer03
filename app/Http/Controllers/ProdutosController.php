<?php

namespace App\Http\Controllers;

use App\Models\fornecedor;
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
        $id_fornecedor = $req->input('id_fornecedor');


        $produto = new Produto();
        $produto->nomeProduto = $nomeProduto;
        $produto->preco       = $preco;
        $produto->peso        = $peso;
        $produto->id_fornecedor = $id_fornecedor;
        $produto->save();
        return redirect()->route('produtos_listar');
    }

    function listar()
    {

        $produto = produto::all();
        return  view('lista_produto', ['produto' => $produto]);
    }


    function produtos_fornecedor($id_fornecedor)
    {
        $fornecedor = fornecedor::findOrFail($id_fornecedor);
        return view('lista_produto_fornecedor', ['fornecedor' => $fornecedor]);
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
        $id_fornecedor = $req->input('id_fornecedor');

        $produto = produto::findOrFail($id);
        $produto->nomeProduto = $nomeProduto;
        $produto->preco = $preco;
        $produto->peso = $peso;
        $produto->id_fornecedor = $id_fornecedor;


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
