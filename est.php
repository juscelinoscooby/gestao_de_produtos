<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestão de Produtos</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
	<header>
    <h1><span class="material-symbols-outlined">
    deployed_code
    </span> <span></span> Gestão de Produtos </h1>
    <nav>
        <ul>
          <li><a href="index.html">Página Inicial</a></li>

          <li><a href="add.html">Adicionar Produto</a></li>
          <li><a href="est.php">Produtos em Estoque</a></li>
          <li><a href="sobre.html">Sobre</a></li>
        </ul>
      </nav>

<br>
	</header>
	<main>
		<?php include "listar_produtos.php"; ?>
	</main>
	<footer>
		<script type="text/javascript" src="script.js"></script>
	</footer>
</body>
</html>