@extends('template')

<link rel="C:\xampp\htdocs\exer03\resources\views\template.blade.php" type="text/css" href="style.css" />

@section('titulo')
Produto - Novo

@endsection

@section('conteudo')
<h1>Alterar produto - #{{ $produto->id }}</h1>
<form method="post" action="{{ route('produtos_salvar') }}">
    @csrf
    <input type="hidden" name="id" value=" {{ $produto->id }}">
    <label  class="labels">Nome do Produto</label> 
    <input type="text" name="nomeProduto" class="texto" value="{{ $produto->nomeProduto}}"></br>
    <label  class="labels">Preco</label>
    <input type="text" name="preco"  class="texto" value="{{ $produto->preco}}"></br>
    <label  class="labes">peso</label>
    <input type="text" name="peso"  class="texto" value="{{ $produto->peso}}"></br>
    <label  class="labels">Fornecedor</label>
    <input type="text" name="id_fornecedor"  class="texto" value="{{ $produto->id_fornecedor}}"><br>
    
    
    <input type="submit" value="Enviar" class="enviar">

</form>
@endsection