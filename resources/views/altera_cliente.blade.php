@extends('template')

@section('titulo')
Alterar cliente - #{{ $cliente->id }}
@endsection

@section('conteudo')
<h1>Alterar cliente - #{{ $cliente->id }}</h1>
<form method="post" action="{{ route('clientes_salvar') }}">
    @csrf
    <input type="hidden" name="id" value="{{ $cliente->id }}" class="texto">
    <label class="labels">Nome</label >
    <input type="text" name="nome" value="{{ $cliente->nome }}" class="texto"><br>
    <label class="labels">Telefone</label>
    <input type="text" name="telefone" value="{{ $cliente->telefone }}"  class="texto"><br>
    <label class="labels">Renda</label>
    <input type="text" name="renda" value="{{ $cliente->renda }}"  class="texto"><br>

    <input type="submit" value="Enviar">
</form>
@endsection