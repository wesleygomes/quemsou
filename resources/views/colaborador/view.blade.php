@extends('layout')

@section('conteudo')
    <h1>Detalhes do Colaborador {{$c->nome}}</h1>
    <ul>
        <li>Nome: {{$c->nome}}</li>
        <li>Função: {{$c->funcao}}</li>
        <li>CPF: {{$c->cpf or 'não cadastrou'}}</li>
        <li>Descrição: {{$c->descricao}}</li>
    </ul>
@stop