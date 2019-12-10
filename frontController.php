<?php

//lidar com os erros!
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$uri = filter_input(INPUT_SERVER, 'REQUEST_URI');
$explodeURI = explode("/", filter_input(INPUT_SERVER, 'REQUEST_URI')); //quebra a URL nos pedaços usando a barra como separador

require_once('biblioteca/rotas.php');
require_once('biblioteca/visao.php');

if(!$rota = procurarRota($uri)) { 
    die("Rota não encontrada no arquivo rotas.php"); 
}

$arquivoControlador = "controlador/" . $rota['controlador'] . ".php";
if (!file_exists($arquivoControlador)) {
    die("Nao foi encontrado o arquivo: '$arquivoControlador' para enviar a solicitacao!");
}

require_once $arquivoControlador; //se existir inclui o arquivo


try {
    //verifica se NÃO existe a função correspondente a ação no controlador!
    if (!is_callable($rota['acao'])) {
        die('Não foi encontrada a <code>função</code> correspondente a ação <code>"' . $rota['acao'] . '"</code> do controlador <code>"' . $rota['controlador'] . '"</code>');
    }

    if(array_key_exists("parametros", $rota)){
        $numArgumentosDaURL = sizeof($rota['parametros']);

        $fct = new ReflectionFunction($rota['acao']);
        $numArgumentosDaFuncao = $fct->getNumberOfRequiredParameters();
        
        if($numArgumentosDaURL !== $numArgumentosDaFuncao) {
            die("A função que você está tentando chamar precisa dos parâmetros declarados na URL!");
        }
    }

  
    
    $retorno = call_user_func_array($rota['acao'], $rota['parametros']); //chama a funcao passando parametros   
        
    
    if($retorno === null) {
        die("ERRO: Você precisa retornar uma visão!");
    }

    extract($retorno);

    require_once("visao/template.php");

}
catch (ArgumentCountError $e) {
        echo "chama 404!";
}    




function procurarRota($uri){
    global $rotas;
    $parametros = array();
    foreach($rotas as $rota) {
        if(preg_match($rota['uri'], $uri, $matches)){


            if(preg_match_all($rota['uri'], $uri, $matches) >= 1) {
                array_shift($matches);
                foreach($matches as $match) {
                    $parametros[] = array_pop($match);
                }
            }
            $rota['parametros'] = $parametros;

            return $rota;
        };
    }
    return false;
}