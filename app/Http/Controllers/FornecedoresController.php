<?php

namespace App\Http\Controllers;

use App\Models\fornecedor;
use Illuminate\Http\Request;

class FornecedoresController extends Controller
{
    function cadastro_novo()
    {
        return view('novo_fornecedor');
    }

    function novo(Request $req)
    {
        $nome = $req->input('fornecedor');
        $endereco = $req->input('endereco');
        $cep = $req->input('cep');
        $cidade = $req->input('cidade');
        $estado = $req->input('estado');

        $fornecedor = new fornecedor();
        $fornecedor->nome = $nome;
        $fornecedor->endereco = $endereco;
        $fornecedor->cep = $cep;
        $fornecedor->cidade = $cidade;
        $fornecedor->estado = $estado;

        $fornecedor->save();

        return redirect()->route('fornecedores_listar');
    }

    function listar()
    {
        $fornecedor = fornecedor::all();
        return view('lista_fornecedor', ['fornecedor' => $fornecedor]);
    }

    function alterar($id)
    {
        $fornecedor = fornecedor::findOrFail($id);

        return view('altera_fornecedor', ['fornecedor' => $fornecedor]);
    }

    function salvar(Request $req)
    {
        $id = $req->input('id');
        $nome = $req->input('nome');
        $endereco = $req->input('endereco');
        $cep = $req->input('cep');
        $cidade = $req->input('cidade');
        $estado = $req->input('estado');

        $fornecedor = fornecedor::findOrFail($id);
        $fornecedor->nome = $nome;
        $fornecedor->endereco = $endereco;
        $fornecedor->cep = $cep;
        $fornecedor->cidade = $cidade;
        $fornecedor->estado = $estado;

        $fornecedor->save();

        return redirect()->route('fornecedores_listar');
    }

    function excluir($id)
    {
        $fornecedor = fornecedor::findOrFail($id);
        $fornecedor->delete();

        return redirect()->route('fornecedores_listar');
    }
}
