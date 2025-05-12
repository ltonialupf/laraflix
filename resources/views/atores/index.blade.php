@extends('adminlte::page')

@section('content')
<h1>Atores</h1>
<table class="table table-striped">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Data de Nascimento</th>
        </tr>
    </thead>

    <tbody>
        @foreach($atores as $ator)
        <tr>
            <td>{{ $ator->nome }}</td>
            <td>{{ $ator->data_nascimento }}</td>
        </tr>
    </tbody>
        @endforeach
</table>
@stop

