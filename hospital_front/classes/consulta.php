<?php
require_once "banco.php";
require_once "session.php";

class Consulta
{
  private $conexao;
  private $horario;
  private $dt;
  private $especialidade;
  private $fk_usuario;

  public function __construct()
  {
    $banco = new Banco();
    $this->conexao = $banco->conectar();
  }

  public function cadastrar($id_usuario_session)
  {
    $sql =
      "SELECT COUNT(*) FROM consulta WHERE horario = TIME(:horario) AND dt = :dt AND especialidade = :especialidade";
    $consultaExistente = $this->conexao->prepare($sql);

    $horario_com_segundos = $this->horario . ":00";

    $consultaExistente->bindParam(
      ":horario",
      $horario_com_segundos,
      PDO::PARAM_STR
    );

    $data = date("Y-m-d", strtotime(str_replace("/", "-", $this->dt)));
    $consultaExistente->bindParam(":dt", $data, PDO::PARAM_STR);
    $consultaExistente->bindParam(
      ":especialidade",
      $this->especialidade,
      PDO::PARAM_STR
    );
    $consultaExistente->execute();

    $existeConsulta = $consultaExistente->fetchColumn();

    if ($existeConsulta != 0) {
      return false; // Já existe uma consulta com os mesmos valores
    } else {
      $sqlInserir = "INSERT INTO consulta(id, horario, dt, especialidade, fk_usuario) 
                 VALUES(NULL, TIME(:horario), :dt, :especialidade, :fk_usuario)";

      try {
        $consulta = $this->conexao->prepare($sqlInserir);

        $consulta->bindParam(":horario", $horario_com_segundos, PDO::PARAM_STR);
        $consulta->bindParam(
          ":especialidade",
          $this->especialidade,
          PDO::PARAM_STR
        );

        $data = date("Y-m-d", strtotime(str_replace("/", "-", $this->dt)));
        $consulta->bindParam(":dt", $data, PDO::PARAM_STR);

        $consulta->bindParam(
          ":fk_usuario",
          $id_usuario_session,
          PDO::PARAM_STR
        );
        $consulta->execute();

        return true;
      } catch (Exception $erro) {
        die("Erro: " . $erro->getMessage());
      }
    }
  }

  public function atualizarFk($last_id, $user_id): void
  {
    $sql = "UPDATE usuario SET fk_consulta = :last_id WHERE id = :usuario_id";

    try {
      $consulta = $this->conexao->prepare($sql);
      $consulta->bindParam(":last_id", $last_id, PDO::PARAM_INT);
      $consulta->bindParam(":usuario_id", $user_id, PDO::PARAM_INT);
      $consulta->execute();
    } catch (Exception $erro) {
      die("Erro: " . $erro->getMessage());
    }
  }

  public function buscarUltimoId()
  {
    $sql = "SELECT * FROM consulta WHERE id = LAST_INSERT_ID()";

    try {
      $consulta = $this->conexao->prepare($sql);
      $consulta->execute();
      $resultado = $consulta->fetch(PDO::FETCH_COLUMN, 0);
    } catch (Exception $erro) {
      die("Erro: " . $erro->getMessage());
    }

    return $resultado;
  }

  // Getter e Setter para $horario
  public function getHorario()
  {
    return $this->horario;
  }

  public function setHorario($horario)
  {
    $this->horario = $horario;
  }

  // Getter e Setter para $dt
  public function getDt()
  {
    return $this->dt;
  }

  public function setDt($dt)
  {
    $this->dt = $dt;
  }

  public function setEspecialidade($especialidade)
  {
    $this->especialidade = $especialidade;
  }

  // Getter para $especialidade
  public function getEspecialidade()
  {
    return $this->especialidade;
  }

  // Getter e Setter para $fk_usuario
  public function getFkUsuario()
  {
    return $this->fk_usuario;
  }

  public function setFkUsuario($fk_usuario)
  {
    $this->fk_usuario = $fk_usuario;
  }
}

?>
