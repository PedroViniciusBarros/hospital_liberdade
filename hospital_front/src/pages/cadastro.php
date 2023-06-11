<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <title> Hospital da Liberdade</title>

  <link rel="shortcut icon" type="image/x-icon" href="../../imagens/icone_hospital2.png">
  <link rel="stylesheet" type="text/css" href="../../css/cadastro.css">
  <script src="../../javascript/pattern.js"></script>
  <script src="../../javascript/validar.js"></script>

</head>

<body>
  <form method="POST"  onsubmit="return validarFormulario()">
    <div class="container">
      <div class="form-container">
        <!-- Icon -->
        <div class="icone">
          <img src="../../imagens/icone_hospital2.png" id="icon" alt="User Icon" />
        </div>
        <div class="right-container">
          <div class="right-inner-container">

            Nome <br>
            <input type="text" id="nome" name="nome" placeholder="Nome Completo" required>
            <br><br>

            CPF <br>
            <input required type="text" id="cpf" name="cpf" placeholder="123.456.789-00" OnKeyPress="formatar('###.###.###-##',this)" maxlength="14" pattern="\d{3}.\d{3}.\d{3}-\d{2}"> <br><br>

            Data de Nascimento <br>
            <input required type="text" id="nasc" name="nasc" placeholder="DD/MM/AAAA" OnKeyPress="formatar('##/##/####',this)" pattern="\d{2}/\d{2}/\d{4}" maxlength="10" max="<?php echo date(
              "Y-m-d"
            ); ?>">
            <br><br>

            Sexo:
            <input required type="radio" name="Sexo" value="Masculino">Masculino
            <input required type="radio" name="Sexo" value="Feminino">Feminino
            <br><br>

            Celular <br>
            <input required type="text" id="tel" name="tel" placeholder="(XX) XXXXX-XXXX" maxlength="14" OnKeyPress="formatar('(##)#####-####',this)" pattern="\(d{2})\d{5}-\d{4}">
            <br><br>

            Email <br>
            <input required type="text" id="emal" name="emal" placeholder="email@email.com">
            <br><br>

            Senha <br>
            <input type="password" id="senha" name="senha" minlength="8" required placeholder="Senha">
            <br><br>

            Confirmar Senha <br>
            <input type="password" id="confirmar-senha" name="confirmar-senha" minlength="8" required placeholder="Confirmar Senha">
            <br>

            <input type="submit" class="fadeIn fourth cadastrar" value="Cadastrar">

          </div>
        </div>
      </div>
    </div>
  </form>

  <?php
  require_once "../../classes/validarEmail.php";
  $validar = new ValidadorEmail();
  $validar->validarEmail();
  ?>

</body>

</html>
