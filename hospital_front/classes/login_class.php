<?php

require_once "Usuario.php";
require_once "session.php";

/* Verificação de campos do formulário */
/*Se algum dos campos estiver vazio, o login não continuará*/
if (empty($_POST["login"]) || empty($_POST["senha"])) {
  echo '<script> alert("Campos obrigatorios!") </script>';
  echo '<script>
  window.location.href = "../src/pages/login.php";
</script>';
} else {
  // Capturamos o e-mail informado
  $usuario = new Usuario();
  $usuario->setEmail($_POST["login"]);

  // Buscando um usuário no banco a partir do e-mail
  $dados = $usuario->buscar();

  /* Se dados for falso (ou seja, não tem dados
   de nenhum usuário cadastrado) */
  if (!$dados) {
    // Então, fica no login e dá um feedback
    echo '<script> alert("Usuario não encontrado!") </script>';
    echo '<script>
    window.location.href = "../src/pages/login.php";
</script>';
  } else {
    /* Verificação da senha e login */

    //Como a senha no banco está criptografada, podemos usar a função password_verify
    //Que nos permite comparar o hash do banco com a senha coletada do forms de login
    if (password_verify($_POST["senha"], $dados["Senha"])) {
      // Estando certa, será feito o login
      $sessao = new Acesso();
      $sessao->login($dados["id"], $dados["Nome"], $dados["Email"]);
      header("location:../src/pages/home.php");
    } else {
      // Caso contrário, mantenha na página login e apresente uma mensagem
      echo '<script> alert("senha incorreta!") </script>';
      echo '<script>
      window.location.href = "../src/pages/login.php";
  </script>';
    }
  }
}

?>
