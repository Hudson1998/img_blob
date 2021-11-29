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
$id_imagem = 1;
$sql = "SELECT imagem FROM imagem WHERE codigo = 1";

$result = mysqli_query($conn,$sql);  
$row = mysqli_fetch_object($result);
// header("Content-type: image/jpeg");
// echo $row->imagem;
echo '<img width="500px" src="data:image/jpeg;base64,' . base64_encode( $row->imagem ) . '" />';

//  echo '<img src="'. $row->imagem . '" />';