@extends('template')

<link rel="C:\xampp\htdocs\exer03\resources\views\template.blade.php" type="text/css" href="style.css" />

@section('titulo')
Home
@endsection

@section('conteudo')

<div class="top" style="height: 100px;"></div>
<div  style="background-color: #1F2326; text-align: center;">
<img src="https://cdn.discordapp.com/attachments/664223166582751252/963170853783216208/Sem_titulo-2.png" style="">
</div>

<div class="meio" style="text-align: center; margin: 45px;">
<a href="{{ route('clientes_novo')}}" class="btn btn-danger">Novo Cliente</a>
<a href="{{ route('fornecedores_novo') }}" class="btn btn-danger">Novo Fornecedor</a>
<a href="{{ route('produtos_novo') }}" class="btn btn-danger" class="botao">Novo Produto</a>
</div>


@endsection