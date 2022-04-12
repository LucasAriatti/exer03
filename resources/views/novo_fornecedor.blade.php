@extends('template')

<link rel="C:\xampp\htdocs\exer03\resources\views\template.blade.php" type="text/css" href="style.css" />

@section('titulo')
Fonecedor - Novo

@endsection

@section('conteudo')
<h1>Novo forncedor</h1>
<form method="post" action="{{ route('fornecedores_novo') }}">
    @csrf
    <label class="labels">Nome do fornecedor</label>
    <input type="text" name="fornecedor" class="texto"><br>
    <label class="labels">Endereco</label>
    <input type="text" name="endereco" class="texto"><br>
    <label class="labels">Cep</label>
    <input type="text" name="cep" class="texto"><br>
    <label class="labels">Cidade</label>
    <input type="text" name="cidade" class="texto"><br>
    <label class="labels">Estado</label>
    <select class="form-select" aria-label="Default select example" name="estado " style=" align-self: flex;width: 75%;    float: right;text-align: center; margin-bottom: 15px;">
        <option selected>Estado</option>
        <option value="SC">SC</option>
        <option value="RS">RS</option>
        <option value="PR">PR</option>
        <option value=" MG">MG</option>

</select><br>    


    <input type="submit" class="enviar" value="Enviar">
</form>
@endsection