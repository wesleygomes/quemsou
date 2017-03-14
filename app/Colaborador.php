<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Colaborador extends Model {

    protected $table = 'tb_colaborador';
    public $timestamps = false;

    protected $fillable = array('nome', 'cpf', 'funcao', 'descricao');

    protected $guarded = ['id_colaborador'];



}
