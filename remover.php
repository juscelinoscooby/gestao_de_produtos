<?php
include "conexao.php";
$codigo = $_POST['codigo'];
$sql = "DELETE FROM tb_produtos WHERE codigo='$codigo'";
if (mysqli_query($conn, $sql)) {
	echo "Produto removido com sucesso!";
	header('Location:est.php');

} else {
	echo "Erro ao remover produto: " . mysqli_error($conn);
}
mysqli_close($conn);
?>
