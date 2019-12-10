<?php

rota('/', 'paginasControlador', 'index');
rota('/paginas/adicionar', 'paginasControlador', 'adicionar');
rota('/paginas/ver/{id}/{id2}', 'paginasControlador', 'ver');
rota('/paginas/sobre/{id}', 'paginasControlador', 'sobre');

rota('/paginas/rota2par/{id}/{nome}', 'paginasControlador', 'rota2par');

function rota($uri, $controlador, $acao, $permissoes = ['visitante']) {
    global $rotas;

    $patterns = "/\//";
    $replacements = "\/";
    $uri = preg_replace($patterns, $replacements, $uri);
    $parametros = array();

    if(strpos($uri, '{')){
        
        $patterns = "/\{\w+\}/";
        $replacements = "(\w+)";
        $uri = preg_replace($patterns, $replacements, $uri);
    }

    $uri = "/^" . $uri . "$/";

    $rotas[] = compact("uri", "controlador", "acao", "parametros", "permissoes");


}