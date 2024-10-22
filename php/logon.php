<?php
$email = $_POST['emaillogin'];
$senhalogin = $_POST['passwordllogin'];

include 'conexao.php';

$sql = "SELECT * FROM tb_user WHERE email = '$email' ";

$query = $conexao ->query($sql);
$result = $query ->fetch_assoc();

print_r($result);

$email_banco = $result['email'];
$senha_banco = $result['senha'];

if($email == $email_banco && $senhalogin == $senha_banco){
    hearder ('location: ../tela_inicial.html');    
} else {
    echo "<script> alert('Usuário ou senha inválida'); history.back(); </script>";
}

?>