<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Categoria</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">


    </head>
    <body>
        <div class="container text-center">
            <div style="color: white">
              <?php
              include 'php/conexao.php';
              session_start();
              if (isset($_SESSION['id'])) {
                  $id = $_SESSION['id'];
                  $sql = "SELECT * FROM tb_user WHERE id_usuario = $id";
                  $query = $conexao->query($sql);
                  $resultado = $query->fetch_assoc();
                  echo "Olá", $resultado['nome']."!";
              }else {
                  echo "<script> alert('Você não está logado!'); history.back(); </script>";
              }
              ?>
              <a class="btn btn-primary" href="php/logout.php" role="button">Sair</a>
       
            </div>
    

        <i class="fa-solid fa-palette"></i>

        <div class="container" >
            <form action="categoria.html"method ="POST">

                <h2>Cadastro de Categoria</h2>

                <label for="nome">Nome:</label><br>
                <input type="text" class="form-control" id="catname" name="catname" aria-describedby="emailHelp"><br>
     
                <div class="mb-3">
                    <label for="categoria" class="form-label">Tipo de Categoria</label><br>
                    <input type="number" class="form-control" id="tipocat" name="tipocat" aria-describedby="emailHelp">
                  
                </div>
                </select><br>

                <label for="descricao">Descrição:</label><br>
                <input type="text" class="form-control" id="catdesc" name="catdesc" aria-describedby="emailHelp"><br>
     
                <button style="margin-left: 10% ;" class="btn btn-dark" href="tela_inicial.php" >voltar</button>
                <button type="submit" class="btn btn-dark">Lançar </button>
              
            </form>
        </div>
    
       




    </body>
    </html>