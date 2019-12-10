<?php

function exibirVisao($view, $data=null) {

    if($data === null) { die('ERRO: Não existe o vetor de dados sendo passado para a visão!'); }
    if(!is_array($data)) { die('ERRO: Você precisa passar um VETOR (array) de dados para a visão!'); }

    $viewFilePath = 'visao/' . $view . '.visao.php';

    if (!file_exists($viewFilePath)) {
        die("Nao foi encontrado o arquivo '$viewFilePath' correspondente a visao requisitada!");
    }

    $data["viewFilePath"] = $viewFilePath;
    
    return $data;
}

function redirecionarControlador($path) {
    $finalPath = URL_BASE . $path;
    header("location: $finalPath");
    die();
}

function assinalarCampo($valorA, $valorB) {
    if ($valorA == $valorB) {
        return 'selected';
    }
}

?>