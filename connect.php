<?php 

//conexão ao banco de dados
$host = "localhost";
$user = "root";
$pass = "";
$db = "testecc";

$link = mysqli_connect($host,$user,$pass,$db);
if(mysqli_errno($link)) {
    echo "Erro de conexão!";
} else {
    //echo "Conexão realizada com sucesso!<br>";
    //Quando da certo não precisa fazzer nada
}

?>