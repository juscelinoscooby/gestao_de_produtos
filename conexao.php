<?php
// Informações de conexão
$host = "localhost"; // endereço do servidor MySQL
$user = "root"; // nome de usuário do MySQL
$password = ""; // senha do usuário do MySQL
$dbname = "sistema"; // nome do banco de dados

// Conexão com o banco de dados
$conn = mysqli_connect($host, $user, $password, $dbname);

// Verifica se houve erro na conexão
if (!$conn) {
    die("Erro na conexão: " . mysqli_connect_error());
}


// Fecha a conexão
?>
