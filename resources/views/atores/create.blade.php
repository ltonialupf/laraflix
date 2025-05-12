@extends('adminlte::page')

@section('content')
    <h3>Novo Ator</h3>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {!! Html::form()->action(route('atores.store'))->method('POST')->open() !!}
        <div class="form-group">
            {!! Html::text('nome', 'Nome')->placeholder('Digite o nome do ator')->required()->class('form-control') !!}
        </div>
        <div class="form-group">
            {!! Html::text('nacionalidade', 'Nacionalidade')->placeholder('Digite a nacionalidade')->required()->class('form-control') !!}
        </div>
        <div class="form-group">
            {!! Html::date('data_nascimento', 'Data de Nascimento')->required()->class('form-control') !!}
        </div>
        <div class="form-group">
            {!! Html::date('inicio_atividades', 'Data de Início de Atividades')->required()->class('form-control') !!}
        </div>
        <div class="form-group d-flex justify-content-between">
            {!! Html::submit('Salvar')->class('btn btn-primary') !!}
            <button type="reset" class="btn btn-secondary">Limpar</button>
        </div>
    {!! Html::form()->close() !!}
@stop

