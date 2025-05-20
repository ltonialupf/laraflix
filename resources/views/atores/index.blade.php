@extends('adminlte::page')

@section('content')
<h1>Atores</h1>
<table class="table table-striped">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Data de Nascimento</th>
            <th>Nacionalidade</th>
        </tr>
    </thead>

    <tbody>
        @foreach($atores as $ator)
        <tr>
            <td>{{ $ator->nome }}</td>
            <td>{{ $ator->data_nascimento }}</td>
            <td>{{ $ator->nacionalidade == null ? "" : $ator->nacionalidade->descricao }}</td>
            <td>
                <a href="{{ route('atores.edit', [$ator->id]) }}" class="btn-sm btn-success">Editar</a>
                <a href="{{ route('atores.destroy', [$ator->id]) }}" class="btn-sm btn-danger">Remover</a>
            </td>
        </tr>
    </tbody>
        @endforeach
</table>

<a href="{{ route('atores.create') }}" class="btn btn-info">Adicionar</a>
@stop

