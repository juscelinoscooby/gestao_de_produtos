<?php
include "conexao.php";
if(isset($_POST['codigo'], $_POST['produto'], $_POST['quantidade'])){
    $codigo = $_POST['codigo'];
    $produto = $_POST['produto'];
    $quantidade = $_POST['quantidade'];
    $sql = "UPDATE tb_produtos SET produto='$produto', quantidade='$quantidade' WHERE codigo='$codigo'";
    if (mysqli_query($conn, $sql)) {
        echo "Produto editado com sucesso!";
        header('Location:est.php');
    } else {
        echo "Erro ao editar produto: " . mysqli_error($conn);

    }
    mysqli_close($conn);
} else {
    echo "Por favor, preencha todos os campos.";
}
?>
