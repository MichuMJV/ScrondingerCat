<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/usuarios',['uses'=>'UsuariosController@obtenerusuarios']);

$router->get('/usuarios/{id}',['uses'=>'UsuariosController@ObtenerUsuarioporID']);

$router->post('/usuarios',['uses' => 'UsuariosController@Insertar']);

$router->post('/usuariosUpdate', ['uses'=>'UsuariosController@Actualizar']);

$router->delete('/usuarios/{id}',['uses'=>'UsuariosController@eliminar']);





$router->get('/spoiler',['uses'=>'SpoilerController@obtenerSpoiler']);

$router->get('/spoiler/{id}',['uses'=>'SpoilerController@ObtenerSpoilerporID']);

$router->post('/spoiler',['uses' => 'SpoilerController@Insertarcom']);

//$router->post('/spoilerlike/{id}',['uses' => 'SpoilerController@like']);

$router->post('/spoiler',['uses' => 'SpoilerController@Insertar']);

$router->post('/spoilerUpdate', ['uses'=>'SpoilerController@Actualizar']);

$router->delete('/spoiler/{id}',['uses'=>'SpoilerController@eliminar']);




$router->get('/comentario',['uses'=>'ComentarioController@obtenercomentario']);

$router->get('/comentario/{id}',['uses'=>'ComentarioController@ObtenercomentarioporID']);

//$router->post('/spoilerlike/{id}',['uses' => 'ComentarioController@like']);

$router->post('/comentario',['uses' => 'ComentarioController@Insertar']);

$router->delete('/comentario/{id}',['uses'=>'ComentarioController@eliminar']);















//php -S localhost:8000 -t public
//git push origin master
//git pull origin master

