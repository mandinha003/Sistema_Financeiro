<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lançamento</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

   
       
                   
        <div class="container">
          <form action="categoria.php" method="POST">
             <h2>Cadastro de Lançamento</h2>
   

              <label for="data_lancamento">Data do Lançamento:</label><br>
              <input type="date" id="data_lancamento" name="data_lancamento" required style="width: 300px"><br><br>
       
              <label for="ds_lancamento">Descrição:</label><br>
              <input type="text" id="ds_lancamento" name="ds_lancamento" maxlength="40" required style="width: 300px; height: 30px"><br><br>
       
              <label for="fk_usuario" id="usu">Usuário:</label><br>
              <select id="fk_usuario" name="fk_usuario" required style="width: 300px">
               
                  <option value="1">Usuário 1</option>
                  <option value="2">Usuário 2</option>
              </select><br><br>
       
              <label for="fk_categoria" id="cat">Categoria:</label><br>
              <select id="fk_categoria" name="fk_categoria" required style="width: 300px">
                 
                  <option value="1">Categoria 1</option>
                  <option value="2">Categoria 2</option>
              </select><br><br>
       
              <button type="submit" class="btn btn-dark">Cadastrar Lançamento</button>
              <button type="submit" href="categoria.php" class="btn btn-dark">Voltar</button>
          </form>
      </div>


    
</body>
</html>