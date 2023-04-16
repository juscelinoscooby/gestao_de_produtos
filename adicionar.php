<?php
include "conexao.php";
$codigo = $_POST['codigo'];
$produto = $_POST['produto'];
$quantidade = $_POST['quantidade'];
$sql = "INSERT INTO tb_produtos (codigo, produto, quantidade) VALUES ('$codigo', '$produto', '$quantidade')";
if (mysqli_query( $conn,$sql)) {
	echo "Produto adicionado com sucesso!";
	header('Location:est.php');
} else {
	echo "Erro ao adicionar produto: " . mysqli_error($conn);
}
mysqli_close($conn);
?>
