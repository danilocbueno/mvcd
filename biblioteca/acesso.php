<?php

define('ACESSO', true);

function acessoLogar($usuario) {
    if(!empty($usuario)) { //se o usuario não for vazio, logo existe o usuário na base com as credenciais
        $_SESSION["acesso"] = array( //cria a sessao acesso com os dados do usuario
            "email" => $usuario["email"], 
            "papel" => $usuario["papel"]
        );
        return true; 
    }
    return false;
}

function acessoDeslogar() {
    if (isset($_SESSION["acesso"])) {
        $_SESSION["acesso"] = null;
        unset($_SESSION["acesso"]);
    }
}

function acessoUsuarioEstaLogado() {
    return isset($_SESSION["acesso"]);
}

function acessoPegarPapelDoUsuario() {
    if (acessoUsuarioEstaLogado()) {
        return $_SESSION["acesso"]["papel"];
    }
}

function acessoPegarUsuarioLogado() {
    if (acessoUsuarioEstaLogado()) {
        return $_SESSION["acesso"]["email"];
    }   
}
