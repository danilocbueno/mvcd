<?php

require_once "modelo/usuarioModelo.php";

/** anon */
function index() {
    if (ehPost()) {
        extract($_POST);

        $usuario = pegarUsuarioPorEmailSenha($login, $passwd);

        if (acessoLogar($usuario)) {
            alert("bem vindo" . $login);
            redirecionar("usuario");
        } else {
            alert("usuario ou senha invalidos!");
        }
    }
    exibir("login/index");
}

/** anon */
function logout() {
    acessoDeslogar();
    alert("deslogado com sucesso!");
    redirecionar("usuario");
}

?>