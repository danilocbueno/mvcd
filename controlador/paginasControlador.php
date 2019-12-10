<?php

/* CONTROLADOR
 * funçao: controlar as páginas estáticas (páginas sem acesso ao modelo)  */

function index() {
    echo "ola Mundo!";
    return exibirVisao("paginas/sobre", $dados = array());
}

function sobre($id) {
    $dados["a"] = 'alow';
    echo "aewww";
    echo $id;


    return exibirVisao("paginas/sobre", $dados);
}

function alow() {
    echo "aew";
    return exibirVisao("paginas/sobre", $dados = array());
}

function rota2par($id, $nome) {
    echo("id: $id");
    echo("nome: $nome");
    return exibirVisao("paginas/sobre", $dados = array('a'=>$id));
}