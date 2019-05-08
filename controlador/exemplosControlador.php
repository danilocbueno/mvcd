<?php

function passarDadosParaVisao() {
    $dados["dadoString"] = "Dado do tipo string vindo do controlador!";
    exibir("exemplos/receberDados", $dados);
}

function pegandoDadosDaVisao() {

    if(ehPost()) {
        //aqui os dados foram submetidos!
        $nome = $_POST["nome"];
        echo $nome;
    } else {
        //aqui não existem dados submetidos!
    }

    exibir("exemplos/enviarDados");
}

function tratamentoDeDados() {

    if(ehPost()) {
        //aqui os dados foram submetidos!
        $nome = $_POST["nome"];
        $email = $_POST["email"];

        if(strlen(trim($nome)) == 0) {
            echo "Nome inválido<br>";
        }

        if(strlen(trim($nome)) == 0) {
            echo "Email inválido";
        }

        echo "<br>Nome via POST: " . $nome;
        echo "<br>Email via POST: " . $email;
        
    } else {
        //aqui não existem dados submetidos!
    }
    exibir("exemplos/enviarDados");
}