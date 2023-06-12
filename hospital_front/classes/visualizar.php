<?php
require_once "banco.php";
require_once "session.php";

class Visualizar
{
  private $conexao;

  public function __construct()
  {
    $banco = new Banco();
    $this->conexao = $banco->conectar();
  }

  public function buscarUltimasConsultas($limit, $fk_usuario)
  {
    $sql =
      "SELECT dt, horario, especialidade FROM consulta WHERE fk_usuario = :id ORDER BY dt DESC LIMIT :limit";

    try {
      $consulta = $this->conexao->prepare($sql);
      $consulta->bindParam(":id", $fk_usuario, PDO::PARAM_INT);
      $consulta->bindParam(":limit", $limit, PDO::PARAM_INT);
      $consulta->execute();
      $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
      return $resultado;
    } catch (Exception $erro) {
      die("Erro: " . $erro->getMessage());
    }
  }

  public function buscarConsultas($fk_usuario)
  {
    $sql = "SELECT * FROM consulta WHERE fk_usuario = :fk_usuario";

    try {
      $consulta = $this->conexao->prepare($sql);
      $consulta->bindParam(":fk_usuario", $fk_usuario, PDO::PARAM_INT);
      $consulta->execute();
      $resultado = $consulta->fetch(PDO::FETCH_ASSOC);
    } catch (Exception $erro) {
      die("Erro: " . $erro->getMessage());
    }

    return $resultado;
  }

  public function excluirConsulta($fk_usuario, $consulta)
  {
    $sql =
      "DELETE FROM consulta WHERE fk_usuario = :fk_usuario AND id = :id AND dt = :dt AND especialidade = :especialidade AND horario = :horario";

    $id = $consulta["id"];
    $dt = $consulta["dt"];
    $especialidade = $consulta["especialidade"];
    $horario = $consulta["horario"];
    try {
      $consulta = $this->conexao->prepare($sql);
      $consulta->bindParam(":fk_usuario", $fk_usuario, PDO::PARAM_INT);
      $consulta->bindParam(":id", $id, PDO::PARAM_INT);
      $consulta->bindParam(":dt", $dt, PDO::PARAM_STR);
      $consulta->bindParam(":especialidade", $especialidade, PDO::PARAM_STR);
      $consulta->bindParam(":horario", $horario, PDO::PARAM_STR);
      $consulta->execute();
      return true;
    } catch (Exception $erro) {
      die("Erro: " . $erro->getMessage());
    }
  }
}
