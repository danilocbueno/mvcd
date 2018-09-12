<?php

function conn() {
    $cnx = mysqli_connect("localhost", "mysql", "qwe123", "mvcd");
    if (!$cnx) die('Deu errado a conexao!');
    return $cnx;
}