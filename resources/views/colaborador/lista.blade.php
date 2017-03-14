@extends('layout')

@section('conteudo')
    <h1>Lista de Colaboradores</h1>
    <table class="table table-striped">
        <thead class="thead-inverse">
        <tr>
            <th>Nome</th>
            <th>Função</th>
            <th>CPF</th>
            <th>Ações</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($colaboradores as $colaborador)
            <tr>
                <td>{{$colaborador->nome}}</td>
                <td>{{$colaborador->funcao}}</td>
                <td>{{$colaborador->cpf ?: 'Sem CPF' }}</td>
                <td>
                    <a href="{{action('ColaboradorController@mostra', $colaborador->id)}}" title="Visualizar" class="btn btn-xs btn-primary ui-tooltip" data-toggle="tooltip" data-placement="top"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></a>
                    <a href="{{action('ColaboradorController@busca', $colaborador->id)}}" title="Editar" class="btn btn-xs btn-primary ui-tooltip" data-toggle="tooltip" data-placement="top"><span class="glyphicon glyphicon-edit" aria-hidden="true"></a>
                    <a href="{{action('ColaboradorController@remove', $colaborador->id)}}" title="Excluir" class="btn btn-xs btn-primary ui-tooltip" data-toggle="tooltip" data-placement="top"><span class="glyphicon glyphicon-remove" aria-hidden="true"></a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@stop