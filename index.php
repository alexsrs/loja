<?php include("cabecalho.php")?>

<?php 
	function somaArray($array) {
		$soma =0;
		for ($i=0; $i < sizeof($array); $i++) 

			$soma = $soma + $array[$i];
			echo "soma do array: ". $soma;
	} ?>
			<h1>Bem vindo !</h1>

			<?php 
				$ip = "8.8.8.8";
				exec ("ping -n 4 " . $ip, $output, $result   ); // linux usar "ping -n 2"- windows usar "ping -c 2"  
				print_r($output);

				if ($result ==0) {

					?>

			<p class="text-success">O produto <?= $ip; ?>, adicionado com sucesso.</p>
			
		<?php
					echo "ping sucesso";
				}


				else 
					echo "Ping fudeu";
?>

    <?php include("rodape.php")?>   
