<?php
$nomeEvento = $_POST['nome_evento'];
$descricaoEvento = $_POST['descricao_evento'];
$imagem = $_FILES['imagem']['tmp_name'];
$tamanho = $_FILES['imagem']['size'];
$tipo = $_FILES['imagem']['type'];
$nome = $_FILES['imagem']['name'];
$fp = fopen($imagem, "rb");
$conteudo = fread($fp, $tamanho);
$conteudo = addslashes($conteudo);
fclose($fp);
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

$sql = "
INSERT INTO imagem 
(evento,descricao, nome_imagem,tamanho_imagem, tipo_imagem, imagem) 
VALUES 
('$nomeEvento','$descricaoEvento','$nome','$tamanho', '$tipo','$conteudo')";

if ($conn->query($sql) === TRUE) {
    echo "Criado com sucesso";
} else {
    echo "Não foi possivel salvar";
}
$conn->close();
?>