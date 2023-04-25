<?php
			$pasta = $_POST['pasta'];
			$num_imagens = $_POST['num_imagens'];

			for ($i = 1; $i <= $num_imagens; $i++) {
				echo "<tr>";
				echo "<td>";
				echo "<img src='/{$pasta}/{$i}.jpg' width='150' height='100'>";
				echo "</td>";
				echo "</tr>";
			}
		?>