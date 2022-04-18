@extends('template')

<link rel="C:\xampp\htdocs\exer03\resources\views\template.blade.php" type="text/css" href="style.css" />

@section('titulo')
Produto - Novo

@endsection

@section('conteudo')
<h1>Novo Produto</h1>
<form method="post" action="{{ route('produtos_novo') }}">
    @csrf
    <label  class="labels">Nome do Produto</label> 
    <input type="text" name="nomeProduto" class="texto"><br>
    <label  class="labels">Preco</label>
    <input type="text" name="preco"  class="texto"><br>
    <label class="labels">peso</label>
    <input type="text" name="peso"  class="texto"><br>


    <label  class="labels">Fornecedor</label>
    <input type="text" name="id_fornecedor"class="texto"><br>
    <input type="submit" value="Enviar" class="enviar">
</select><br>

</form>
@endsection