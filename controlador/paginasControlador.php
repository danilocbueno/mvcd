<?php

/* CONTROLADOR
 * funçao: controlar as páginas estáticas (páginas sem acesso ao modelo)  */

function index() {
    exibir("paginas/inicial");
}

function test($par1, $par2, $par3) {
    echo "par1: $par1, par2: $par2, par3: $par3, ";
    echo "Sou eu teste";
}