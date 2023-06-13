<?php
require_once "consulta.php";
require_once "session.php";
// Verificar se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  session_start();
  // Criar uma instância da classe Cadastro
  $consulta = new Consulta();

  // Definir o valor do email usando o valor enviado pelo formulário
  $consulta->setEspecialidade($_POST["especialidade"]);
  $consulta->setDt($_POST["data"]);
  $consulta->setHorario($_POST["horario"]);

  $resultado = $consulta->cadastrar($_SESSION["id"]);

  if ($resultado == true) {
    $consulta_id = $consulta->buscarUltimoId();
    $consulta->atualizarFk($consulta_id, $_SESSION["id"]);

    echo '<script> alert("Consulta Marcada com sucesso!") </script>';
  } else {
    echo '<script> alert("Horario indisponivel!") </script>';
  }
  echo '<script>
  window.location.href = "../src/pages/visualizar.php";
</script>';
}
?>
