<?php

require_once "banco.php";

class Usuario
{
  private $email;
  private $conexao;

  public function __construct()
  {
    $banco = new Banco();
    $this->conexao = $banco->conectar();
  }

  public function buscar()
  {
    $sql = "SELECT * FROM usuario WHERE email = :email";

    try {
      $consulta = $this->conexao->prepare($sql);
      $consulta->bindParam(":email", $this->email, PDO::PARAM_STR);
      $consulta->execute();
      $resultado = $consulta->fetch(PDO::FETCH_ASSOC);
    } catch (Exception $erro) {
      die("Erro: " . $erro->getMessage());
    }

    return $resultado;
  }

  public function setEmail($email)
  {
    $this->email = filter_var($email, FILTER_SANITIZE_EMAIL);
  }

  public function getEmail()
  {
    return $this->email;
  }
}

?>
