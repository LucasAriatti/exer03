@extends('template')

@section('conteudo')
@routes
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Fornecedor</th>
            <th>Endereco</th>
            <th>Cep</th>
            <th>Cidade</th>
            <th>Estado</th>    
            <th>Operações</th>
        </tr>
    </thead>
    <tbody>

    @foreach($fornecedor as $f)
    <tr>
        <td>{{ $f->id }}</td>
        <td>{{ $f->nome }}</td>
        <td>{{ $f->endereco }}</td>
        <td>{{ $f->cep }}</td>
        <td>{{ $f->cidade }}</td>
        <td>{{ $f->estado }}</td>
        <td>
            <a href="{{ route('fornecedores_alterar', ['id' => $f->id]) }}" class="btn btn-warning">Alterar</a>
            <a href="#" onclick="excluir({{ $f->id }})" class="btn btn-danger">Excluir</a>
        </td>
    </tr>
    @endforeach
    </tbody>
</table>

<script>
    function excluir(id){
        if (confirm(`Deseja realmente excluir o fornecedor ${id}?`)){
            location.href = route('fornecedores_excluir', {'id':id});
        }
    }
</script>
@endsection
