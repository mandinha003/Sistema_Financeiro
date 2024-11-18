<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lançamento</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="navbar bg-body-tertiary">
        <h2>Cadastro de Lançamento</h2>
    </div>
                   
        <div class="container">
          <form action="categoria.html" method="POST">
              <label for="data_lancamento">Data do Lançamento:</label><br>
              <input type="date" id="data_lancamento" name="data_lancamento" required><br><br>
       
              <label for="ds_lancamento">Descrição:</label><br>
              <input type="text" id="ds_lancamento" name="ds_lancamento" maxlength="40" required><br><br>
       
              <label for="fk_usuario" id="usu">Usuário:</label><br>
              <select id="fk_usuario" name="fk_usuario" required>
               
                  <option value="1">Usuário 1</option>
                  <option value="2">Usuário 2</option>
              </select><br><br>
       
              <label for="fk_categoria" id="cat">Categoria:</label><br>
              <select id="fk_categoria" name="fk_categoria" required>
                 
                  <option value="1">Categoria 1</option>
                  <option value="2">Categoria 2</option>
              </select><br><br>
       
              <button type="submit">Cadastrar Lançamento</button>
              <button type="submit"><a href="categoria.html">Voltar</a></button>
          </form>
      </div>


    
</body>
</html>