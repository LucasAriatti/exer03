@extends('template')

@section('titulo')
Alterar fornecedor - #{{ $fornecedor->id }}
@endsection

@section('conteudo')
<h1>Alterar fornecedor - #{{ $fornecedor->id }}</h1>
<form method="post" action="{{ route('fornecedores_salvar') }}">
    @csrf
    <input type="hidden" name="id" value=" {{ $fornecedor->id }}" class="texto">
    <label class="labels">Nome</label>
    <input type="text" name="nome" value="{{ $fornecedor->nome }}" class="texto"><br>
    <label class="labels">Endereco</label>
    <input type="text" name="endereco" value="{{ $fornecedor->endereco}}" class="texto"><br>
    <label class="labels">Cep</label>
    <input type="text" name="cep" value="{{ $fornecedor->cep }}" class="texto"><br>
    <label class="labels">Cidade</label>
    <input type="text" name="cidade" value="{{ $fornecedor->cidade }}" class="texto"><br>
    <label class="labels">Estado</label>
    <select class="form-select" aria-label="Default select example" name="estado" value="{{ $fornecedor->estado }}">
        <option selected>Estado</option>
        <option value="SC">SC</option>
        <option value="RS">RS</option>
        <option value="PR">PR</option>
        <option value=" MG">MG</option>

</select>    
    

    <input type="submit" value="Enviar">
</form>
@endsection