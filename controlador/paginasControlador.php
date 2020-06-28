<?php

/* CONTROLADOR
 * funçao: controlar as páginas estáticas (páginas sem acesso ao modelo)  */

 /** user, admin */
 function index() {
    exibir("paginas/inicial");
}

/** user, admin */
 function sobre() {
    exibir("paginas/sobre");
}
