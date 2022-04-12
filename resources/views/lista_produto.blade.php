@extends('template')

@section('conteudo')
@routes
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            
            <th>Produto</th>
            <th>Preco</th>
            <th>peso</th>
            <th>Fornecedor</th>    
            <th>Operações</th>
        </tr>
    </thead>
    <tbody>

    @foreach($produto as $p)
    <tr>
        <td>{{ $p->id }}</td>
        <td>{{ $p->nomeProduto }}</td>
        <td>{{ $p->preco }}</td>
        <td>{{ $p->peso }}</td>
        
        <td>--</td>
        <td>
            <a href="{{ route('produtos_alterar', ['id' => $p->id]) }}" class="btn btn-warning">Alterar</a>
            <a href="#" onclick="excluir({{ $p->id }})" class="btn btn-danger">Excluir</a>
        </td>
    </tr>
    @endforeach
    </tbody>
</table>

<script>
    function excluir(id){
        if (confirm(`Deseja realmente excluir o produto ${id}?`)){
            location.href = route('produtos_excluir', {'id':id});
        }
    }
</script>
@endsection
