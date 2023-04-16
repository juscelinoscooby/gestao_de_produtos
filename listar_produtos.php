<?php
	include "conexao.php";
	$sql = "SELECT * FROM tb_produtos";
	$resultado = mysqli_query($conn, $sql);
	if (mysqli_num_rows($resultado) > 0) {
		echo '<table id="produtos">';
		echo '<thead>';
		echo '<tr>';
		echo '<th>Código</th>';
		echo '<th>Produto</th>';
		echo '<th>Quantidade</th>';
		echo '</tr>';
		echo '</thead>';
		echo '<tbody>';
		while ($row = mysqli_fetch_assoc($resultado)) {
			echo '<tr>';
			echo '<td>' . $row['codigo'] . '</td>';
			echo '<td>' . $row['produto'] . '</td>';
			echo '<td>' . $row['quantidade'] . '</td>';
			echo '</tr>';
		}
		echo '</tbody>';
		echo '</table>';
	} else {
		echo "Não há produtos cadastrados.";
	}
	mysqli_close($conn);
?>
