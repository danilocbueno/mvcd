<?php
session_start();

//bibliotecas opicionais opcionais
require_once 'biblioteca/alert.php'; //controla a exibição de mensagens de feedback para o usuário via sessão
require_once 'biblioteca/acesso.php'; //controla o acesso dos usuários as rotas

define('CONTROLADOR_PADRAO', 'paginas'); //por padrão vem definido o controlador de paginas estáticas (paginasControlador)
define('URL_BASE', 'http://localhost:8080/app/');