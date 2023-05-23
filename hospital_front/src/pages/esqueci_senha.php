<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <title> Hospital da Liberdade</title>

  <link rel="shortcut icon" type="image/x-icon" href="imagens/icone_hospital2.png">
  <link rel="stylesheet" type="text/css" href="css/esqueci_senha.css">

</head>

<body>


  <form action="../../database/banco.php" method="POST">
    <div class="container">
      <div class="form-container">
        <!-- Icon -->
        <div class="icone">
          <img src="./imagens/icone_hospital2.png" id="icon" alt="User Icon" />
        </div>
        <div class="right-container">
          <div class="right-inner-container">

            <label for="Senha" id="senha-label">Nova Senha</label>
            <input type="password" id=" " name="Senha" minlength="8" required placeholder="Senha">

            <label for="confirmar-senha" id="confirmar-senha-label">Confirmar Senha</label>
            <input type="password" id="confirmar-senha" name="Senha" minlength="8" required placeholder="Confirmar Senha">

            <input type="submit" class="fadeIn fourth redefinir" value="Redefinir">

          </div>
        </div>
      </div>
    </div>
  </form>

</body>

</html>
