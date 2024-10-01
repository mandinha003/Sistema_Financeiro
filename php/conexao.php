<?php
$servirdor = 'localhost';
$usuario = 'root';
$senha = 'root';
$bd = 'db_contabilidade';


$conexao = new mysqli($servirdor, $usuario, $senha, $bd);

if ($conexao->connect_error ) {
    die ('falha na conexâo' . $conexao -> connect_error);

}else{
    echo "conectado com sucesso";
}












?>