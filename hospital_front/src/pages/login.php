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
      <form class="formulario">
        <label class="usuario" for="login">Usuário</label>
        <input type="text" id="login" name="login" placeholder="email@email.com"><br>
        Senha<br>
        <input type="text" id="password" name="login" placeholder="Senha">
        <input type="submit" class="fadeIn fourth entrar" formaction="home.php" value="Entrar">
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