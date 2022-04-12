@extends('template')

@section('titulo')
Cliente - Novo
@endsection

@section('conteudo')
<h1>Novo cliente</h1>
<form method="post" action="{{ route('clientes_novo') }}">
    @csrf
    <label class="labels">Nome</label>
    <input type="text" name="nome" class="texto"><br>
    <label class="labels">Telefone</label>
    <input type="text" name="telefone" class="texto"><br>
    <label class="labels">Renda</label>
    <input type="text" name="renda" class="texto"><br>

    <input type="submit" value="Enviar" style="width: 20%; padding: 10px;">
</form>
@endsection