@extends('layout')

@section('conteudo')
    <h1>Novo Colaborador</h1>
    <form name="frm" id="frm" method="post" action="/colaboradores/adiciona">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <div class="form-group">
            <label for="nome">Nome: *</label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Primeiro Nome" required>
        </div>
        <div class="form-group">
            <label for="cpf">CPF:</label>
            <input type="text" class="form-control" id="cpf" name="cpf" placeholder="CPF">
        </div>
        <div class="form-group">
            <label for="funcao">Função: *</label>
            <input type="text" class="form-control" id="funcao" name="funcao" placeholder="Sua função" required>
        </div>
        <div class="form-group">
            <label for="descricao">Descrição: *</label>
            <textarea class="form-control" id="descricao" name="descricao" placeholder="Descrição sobre o colaborador" rows="7" required></textarea>
        </div>

        <button type="submit" class="btn btn-default">Cadastrar</button>
    </form>
@stop