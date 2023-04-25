<?php
	if(isset($_POST['nome']) && isset($_POST['idade'])){
		$nome = $_POST['nome'];
		$idade = $_POST['idade'];
		$dias_vida = $idade * 365;

		echo "<p>$nome possui $dias_vida dias de vida.</p>";
	}else{
		echo "<p>Nenhum dado foi submetido.</p>";
	}
	?>

