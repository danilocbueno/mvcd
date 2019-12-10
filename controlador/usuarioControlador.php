<?php

require_once "modelo/usuarioModelo.php";

function listarTodos() {
    $dados["usuarios"] = pegarTodosUsuarios();
    exibir("usuario/listar", $dados);
}

function inserir() {
    exibir("usuario/formulario");
}

function salvar() {
    $nome = $_POST["usuario"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    alert(adicionarUsuario($nome, $email, $senha));
    redirecionar("usuario/index");
}

function deletar($id) {
    alert(deletarUsuario($id));
    redirecionar("usuario/index");
}

function editar($id) {
    $dados["usuario"] = pegarUsuarioPorId($id);
    exibir("usuario/formulario", $dados);
}

function atualizar($id) {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    alert(editarUsuario($id, $nome, $email));
    redirecionar("usuario/index");
}

function visualizar($id) {
    $dados["usuario"] = pegarUsuarioPorId($id);
    exibir("usuario/visualizar", $dados);
}
