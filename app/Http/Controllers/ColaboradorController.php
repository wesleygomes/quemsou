<?php namespace App\Http\Controllers;

use App\Colaborador;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Request;


class ColaboradorController extends Controller {

	public function lista()
    {
        $colaboradores = Colaborador::all();
        return view('colaborador.lista')->withColaboradores($colaboradores);
    }

    public function mostra($id){
        $colaborador = Colaborador::find($id);

        return view('colaborador.view')->with('c', $colaborador);
    }

    public function busca($id){
        $colaborador = Colaborador::find($id);

        if(empty($colaborador)) {
            return "Colaborador não cadastrado!";
        }

        return view('colaborador.form_edita')->with('c', $colaborador);
    }

    public function altera($id){

        $params = Request::all();
        $c = Colaborador::find($id);
        $c->update($params);

        return redirect()->action('ColaboradorController@lista')->withInput(Request::only('nome'));

    }

    public function remove($id){
        $colaborador = Colaborador::find($id);
        $colaborador->delete();
        return redirect()->action('ColaboradorController@lista');
    }

    public function form_novo(){
        return view('colaborador.form');
    }

    public function adiciona(){
        Colaborador::create(Request::all());

        return redirect()->action('ColaboradorController@lista')->withInput(Request::only('nome'));
    }


}
