MVCd - MVC desorientado
=======

Este é um projeto desenvolvido com propósito educacional e não deve ser usado em projetos reais. A ideia geral do projeto é apresentar as ideias e conceitos de arquitetura, modelos e framework para alunos que ainda não conhecem a orientação a objetos.
 
## Estrutura do projeto
A estrutura do projeto é ilustrada abaixo:

    mvcd/
    ├── biblioteca/
    │   ├── bd/
    |   |   └── script_banco.sql
    │   ├── acesso.php
    │   ├── alert.php
    │   ├── mysqli.php
    │   ├── uteis.php
    │   └── visao.php
    └── controlador/
    │   ├── usuarioControlador.php
    │   └── loginControlador.php
    └── modelo/
    │   └── usuarioModelo.php
    └── publico/
    │   ├── css/
    |   |   └── app.css
    │   └── js/
    |      └── app.js
    └── servico/
    └── visao/
    │   ├── login/
    |   |   └── index.visao.php
    │   ├── paginas/
    |   |   └── inicial.visao.php
    │   ├── usuario/
    |   |   ├── formulario.visao.php
    |   |   ├── listar.visao.php
    |   |   └── visualizar.visao.php
    |   ├── cabecalho.php
    |   └── template.php
    ├── .htaccess
    ├── app.php
    ├── index.php
    └── readme.md

O framework utiliza o padrão arquitetural MVC, logo sua estrutura está baseada neste padrão apresentando os três principais objetos da arquitetura, a pasta `modelo`, `controlador` e `visao`. 

## Rotas
As rotas sao convencionadas a seguir o padrao:
`http://localhost/seuprojeto/<CONTROLADOR>/<ACAO>`

O noopmvc utiliza o padrao Front Controller, isso significa que todas as requisições (uma requisicao é qualquer chamada para algum recurso do seu site - uma URL) irão ser atendidas pelo mesmo arquivo, no caso o arquivo `index.php`. Ele será o responsável por tratar essa requisição e repassar para o controlador específico que vai lidar com aquela requisição. Voce não deve alterar o arquivo `index.php` a menos que tenha certeza absoluta do que esta fazendo.

Por exemplo: uma requisicao tipo GET para a URL `http://localhost/seuprojeto/usuario` sera tratada pelo arquivo `index.php` e estará esperando obrigatoriamente um arquivo armazenado na pasta `controladores` na raiz do projeto e com o nome `usuarioControlador.php`. **Você deve seguir seguir essa convenção!**