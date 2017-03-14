@extends('layout')

@section('footer')
    <script type="application/javascript">
        $(function(){
            $("#descricao").val( "{{$c->descricao}}");
        });
    </script>
@stop

@section('conteudo')
    <h1>Editar Colaborador {{$c->nome}}</h1>
    <form name="frm" id="frm" method="post" action="/colaboradores/altera/{{$c->id}}">

        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <input type="hidden" name="id" value="{{$c->id}}">

        <div class="form-group">
            <label for="nome">Nome: *</label>
            <input type="text" class="form-control" id="nome" name="nome" value="{{$c->nome}}" >
        </div>
        <div class="form-group">
            <label for="cpf">CPF:</label>
            <input type="text" class="form-control" id="cpf" name="cpf" value="{{$c->cpf}}" >
        </div>
        <div class="form-group">
            <label for="funcao">Função: *</label>
            <input type="text" class="form-control" id="funcao" name="funcao" value="{{$c->funcao}}" >
        </div>
        <div class="form-group">
            <label for="descricao">Descrição: *</label>
            <textarea class="form-control" id="descricao" name="descricao" rows="7"></textarea>
        </div>

        <button type="submit" class="btn btn-default">Salvar</button>
    </form>
@stop