<!--Para incluir o cabeçalho no seu site você precisa realizar a requisição deste arquivo `template.php`-->
<nav>
  <ul>
    <li><a href="./">Principal</a></li>
    <li><a href="./usuario">Usuario</a></li>
	<?php if(acessoUsuarioEstaLogado()): ?>
		<li>Bem vindo <?=acessoPegarUsuarioLogado()?></li>
		<li><a href="./login/logout">Sair</a></li>
	<?php else: ?>
		<li><a href="./login">Entrar</a></li>
	<?php endif; ?>
  </ul>
</nav>