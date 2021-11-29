<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "272461";
        // Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



$conexao = mysqli_connect("localhost", "root","", "272461");
if ($conexao) {
    $baseSelecionada = mysqli_select_db($conn,"imagem");
    if (!$baseSelecionada) {
        die ('Não foi possível conectar a base de dados: ' . mysql_error());
    } } else {
        die('Não conectado : ' . mysql_error());
    }
?>