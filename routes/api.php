<?php

//Route::get('clientes', 'Api\ClienteApiController@index');

//Rotas de Login
$this->post('login', 'Auth\AuthenticateController@authenticate');
$this->post('login-refresh', 'Auth\AuthenticateController@refreshToken');
$this->get('me', 'Auth\AuthenticateController@getAuthenticatedUser');

// , 'middleware' => 'auth:api'
$this->group(['namespace' => 'Api'], function() {

    //Rotas da cliente
$this->get('clientes/{id}/filmes-alugados','ClienteApiController@alugados');
$this->get('clientes/{id}/documento','ClienteApiController@documento');
$this->get('clientes/{id}/telefone','ClienteApiController@telefone');

$this->apiResource('clientes', 'ClienteApiController');

//Rota de documentos
$this->get('documento/{id}/cliente','DocumentoApiController@cliente');
$this->apiResource('documento', 'DocumentoApiController');


//Rota de clientes
$this->get('telefone/{id}/cliente','TelefoneApiController@cliente');
$this->apiResource('telefone', 'TelefoneApiController');

//Rota de Filmes
$this->apiResource('filme', 'FilmeApiController');
});

