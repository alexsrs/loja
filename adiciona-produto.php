<?php include("cabecalho.php")?>

	<?php

	function insereproduto($conexao, $nome, $preco) {
			$query = "insert into produtos (nome, preco) values ('{$nome}', {$preco} )";
			return mysqli_query($conexao, $query);

	}
		$nome = $_GET["nome"];
		$preco = $_GET["preco"];
		$conexao = mysqli_connect('localhost','root', '' ,'loja');

		if (insereproduto($conexao,$nome,$preco)) { ?>

			<p class="text-success">O produto <?= $nome; ?>, <?= $preco; ?> adicionado com sucesso.</p>
			
		<?php } else { 
			$msg = mysqli_error($conexao);
			?>

			<p class="text-danger">O Produto <?= $nome; ?> não foi adicionado: <?=$msg?></p>
		<?php 
		}
		mysqli_close($conexao);
	?>
	
			
    <?php include("rodape.php")?>   
