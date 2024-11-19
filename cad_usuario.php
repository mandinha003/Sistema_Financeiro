<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tela de login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/c0f408d1cc.js" crossorigin="anonymous"></script>
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
            echo "<script> alert('Você não está logado! '); history.back(); </script>";
        }
        ?>
        <a class="btn btn-primary" href="logout.php" role="button">Sair</a>
 
      </div>

        <div class="row">
          <div class="col-sm-12 col-md-4">
            <img class="img_cad" src="img/5928126_3009236.svg" alt="">
          </div>
          <div class="col-sm-12 col-md-4" style="margin-top: 10%";>
            <i class="fa-solid fa-coins"></i>
            <form action= "php/insert_usuario.php" method ="post">
                <div class="mb-3">
                  <label for="Nome" class="form-label">Nome</label>
                  <input type="text" class="form-control" id="Nome" name="nome" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="Cargo" class="form-label">Cargo</label>
                  <input type="text" class="form-control" id="Cargo" name="cargo" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="senha" class="form-label">Senha</label>
                  <input type="password" class="form-control" name="senha" id="senha">
                </div class="button">
                <button style="margin-left: 35px;" type="submit" class="btn btn-dark">Entrar</button>
              <button style="margin-left: 2px;" type="submit" class="btn btn-dark">Cadastrar</button>  

                </button>
                 
              </form>
          </div>
        </div>
      </div>
 
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>  
</body>
</html>