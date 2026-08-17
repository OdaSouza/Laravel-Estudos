<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


// Criando rota e rertnar Hello World no web site diretamente na pagina.
Route::get('/hello', function () {
    return 'Hello World';
});

#cria uma rota get e retorna "Take the hoobbits to esengard !" no web site diretamente na pagina.
Route::get('/', function () {
    return 'Take the hoobbits to esengard !';
});

/* // Criando rota post e retornar Xakalakaaaa WAAAAA ! no web site diretamente na pagina.
Route::post('hellogaxidrim', function(){
    return 'Xakalakaaaa WAAAAA !';
}); */

// Retorna a função cabulosa lá em HTTP/Controllers/Bergamotius.php
// Route::post('bergamota/{name}', 'Bergamotius@Bergamota');


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('bands/', 'BandController@getAll' );
