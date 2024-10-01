<?php

include 'conexao.php';
$nome = $_POST ['nome'];
$email = $_POST ['email'];
$cargo = $_POST ['cargo'];
$senha = $_POST ['senha'];



$sql = "INSERT INTO tb_user VALUES (null,'$nome', '$email', '$cargo', '$senha')";


if ($conexao->query($sql)){
    echo "<script>alert('Inserido com Sucesso!)' ; history.back()<script>";
}else {
    echo "Falha na conexão com bancos de dados";

}







?>


