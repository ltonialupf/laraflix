@extends('adminlte::page')

@section('content')
    <h3>Editando Ator: {{ $ator->nome }}</h3>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {!! Html::form()->action(route('atores.update', $ator->id))->method('PUT')->open() !!}
        <div class="form-group">
            {!! Html::label('Nome') !!}
            {!! Html::text('nome', 'Nome')->value($ator->nome)->placeholder($ator->nome)->required()->class('form-control') !!}
        </div>
        <div class="form-group">
            {!! Html::label('Nacionalidade') !!}
            {!! Html::text('nacionalidade', 'Nacionalidade')->value($ator->nacionalidade)->placeholder($ator->nacionalidade)->required()->class('form-control') !!}
        </div>
        <div class="form-group d-flex justify-content-between">
            {!! Html::submit('Salvar')->class('btn btn-primary') !!}
            <button type="reset" class="btn btn-secondary">Limpar</button>
        </div>
    {!! Html::form()->close() !!}

@stop
