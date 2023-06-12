<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <title> Hospital da Liberdade</title>

  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link rel="stylesheet" href="../../css/login.css">
</head>

<body>
  <div class="wrapper fadeInDown">
    <div id="formContent">
      <!-- Tabs Titles -->

      <!-- Icon -->
      <div class="fadeIn first">
        <img src="../../imagens/icone_hospital2.png" id="icon" alt="User Icon" />
      </div>

      <!-- Login Form -->
      <form action="../../classes/login_class.php" class="formulario" method="post">
        <label class="input-label usuario" for="login">Usuário</label>
        <input type="text" class="input" name="login" placeholder="email@example.com"><br>
        <label class="input-label" for="senha">Senha</label><br>
        <input type="password" class="input" name="senha" placeholder="Senha">
        <input type="submit" class="fadeIn fourth entrar" name="entrar" value="Entrar">
        <input type="submit" class="fadeIn fourth cadastrar" formaction="cadastro.php" value="Cadastrar">

      </form>

      <!-- Remind Passowrd -->
      <div id="formFooter">
        <a class="underlineHover" href="esqueci_senha.php">Esqueci minha senha</a>
      </div>
    </div>
  </div>
</body>

</html>
