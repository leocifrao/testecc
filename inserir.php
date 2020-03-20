<?php 
include ('connect.php');

$qtd = $_POST['quantidade'];
$comp = $_POST['comprimento'];
$alt = $_POST['altura'];
$chapa = $_POST['chapa'];

if($qtd > 0 && $comp >0 && $alt >0 && $chapa != "") {
    mysqli_query($link,"INSERT INTO formulario(quantidade,comprimento,altura,chapa) VALUES ('$qtd','$comp','$alt','$chapa')");
    echo "<br>Dados cadastrados.";
} else {
    echo "Não foi possível cadastrar nenhum dado.";
}

?>