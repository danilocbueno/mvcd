<?php

function conn() {
    $cnx = new PDO('sqlite:data.sqlite');
    if (!$cnx) die('Deu errado a conexao!');
    return $cnx;
}