<?php
require_once "Usuario.php";
require_once "cadastro_class.php";

if (
  empty($_POST["emal"]) ||
  empty($_POST["senha-antiga"]) ||
  empty($_POST["Senha"]) ||
  empty($_POST["confirmar-senha"])
) {
  echo '<script> alert("Campos obrigatorios!") </script>';
  echo '<script>
  window.location.href = "../src/pages/esqueci_senha.php";
</script>';
} else {
  $usuario = new Usuario();
  $usuario->setSenha($_POST["senha-antiga"]);
  $usuario->setEmail($_POST["emal"]);
  $novaSenha = filter_var(
    $_POST["confirmar-senha"],
    FILTER_SANITIZE_SPECIAL_CHARS
  );

  $dados = $usuario->buscar();

  if (!$dados) {
    // Então, fica no login e dá um feedback
    echo '<script> alert("Usuario não encontrado!") </script>';
    echo '<script>
    window.location.href = "../src/pages/login.php";
</script>';
  } else {
    if ($_POST["confirmar-senha"] === $_POST["Senha"]) {
      if (password_verify($_POST["senha-antiga"], $dados["Senha"])) {
        $cadastro = new Cadastro();
        $usuario->atualizarSenha($dados, $cadastro->codificaSenha($novaSenha));
        echo '<script> alert("Senha alterada com sucesso!") </script>';
        echo '<script>
    window.location.href = "../src/pages/login.php";
</script>';
      } else {
        // Caso contrário, mantenha na página login e apresente uma mensagem
        echo '<script> alert("senha incorreta!") </script>';
        echo '<script>
    window.location.href = "../src/pages/esqueci_senha.php";
</script>';
      }
    } else {
      echo '<script> alert("A nova senha deve ser identica em confirmar senha!") </script>';
      echo '<script>
  window.location.href = "../src/pages/esqueci_senha.php";
</script>';
    }
  }
}

?>
