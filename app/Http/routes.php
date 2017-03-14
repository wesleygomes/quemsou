<?php

Route::get('/', 'ColaboradorController@lista');
/*Route::get('/', function(){
	return "<h1>Deu tudo certo</h1>";
});*/

/* GET*/
Route::get('/colaboradores', 'ColaboradorController@lista');
Route::get('/colaboradores/mostra/{id}', 'ColaboradorController@mostra')->where('id', '[0-9]+');
Route::get('/colaboradores/remove/{id}', 'ColaboradorController@remove');
Route::get('/colaboradores/form_novo', 'ColaboradorController@form_novo');
Route::get('/colaboradores/busca/{id}', 'ColaboradorController@busca')->where('id', '[0-9]+');

/*POST*/
Route::post('/colaboradores/adiciona', 'ColaboradorController@adiciona');
Route::post('/colaboradores/altera/{id}', 'ColaboradorController@altera');
