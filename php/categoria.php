<?php

include "conexao.php";

$nome = $_POST['catname'];
$descricao = $_POST['catdesc'];
$tipo = $_POST['tipocat'];

$sql = "INSERT INTO tb_categoria VALUES (NULL, '$nome', $tipo, '$descricao') ";

if($conexao ->query($sql)) {
    echo "<script>alert('Adicionado com sucesso'); window.location.href = '../categoria.html';</script>";
}else{
    echo "Falha na comunicação de dados";
}




?>