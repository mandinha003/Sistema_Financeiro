<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tela inicial</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/c0f408d1cc.js" crossorigin="anonymous"></script>
</head>
<body>
 <div id="tela">
    <h2><?php

include 'php/conexao.php';
session_start();
if (isset($_SESSION['id'])) {
  $id = $_SESSION['id'];
  $sql = "SELECT * FROM tb_user WHERE id_usuario = $id ";

  $query = $conexao ->query($sql);
  $result = $query ->fetch_assoc();

  echo  $result['nome']."!";

   } else{
    echo "<script> alert('Usuário não está logado'); history.back(); </script>";
   }
?>
        
    Bem vindo ao Sistema</h2>
    <h4>
    <p>Escolha uma das opções</p>
    </h4>
    <div>
        <a class="btn btn-danger" href="index.html" role="button">Voltar ao login</a>
        <a href="categoria.php" type="button" class="btn btn-dark">Cadastrar Categoria</a>
        <a href="lançamento.php" type="button" class="btn btn-dark">Registrar um Lançamento</a>
    </div>

 </div>
</body>
</html>