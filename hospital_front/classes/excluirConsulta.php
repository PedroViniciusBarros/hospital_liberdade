<?php

require_once "session.php";
require_once "visualizar.php";

session_start();

// Instancie a classe Visualizar
$visualizar = new Visualizar();
$consultas = $visualizar->buscarConsultas($_SESSION["id"]);

$visualizar->excluirConsulta($_SESSION["id"], $consultas);

echo '<script> alert("Consulta Excluida!") </script>';

echo '<script>
window.location.href = "../src/pages/visualizar.php";
</script>';

?>
