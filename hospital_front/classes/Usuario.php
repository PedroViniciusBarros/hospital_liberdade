<?php

require_once "banco.php";

class Usuario
{
  private $email;
  private $senha;
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

  public function atualizarSenha($dados, $senhaNova)
  {
    $sql = "UPDATE usuario SET Senha = :senhaNova WHERE id = :id";

    try {
      $consulta = $this->conexao->prepare($sql);
      $consulta->bindParam(":id", $dados["id"], PDO::PARAM_INT);
      $consulta->bindParam(":senhaNova", $senhaNova, PDO::PARAM_STR);
      $consulta->execute();
    } catch (Exception $erro) {
      die("Erro: " . $erro->getMessage());
    }
  }

  public function setEmail($email)
  {
    $this->email = filter_var($email, FILTER_SANITIZE_EMAIL);
  }

  public function getEmail()
  {
    return $this->email;
  }

  public function setSenha($senha)
  {
    $this->senha = filter_var($senha, FILTER_SANITIZE_SPECIAL_CHARS);
  }

  public function getSenha()
  {
    return $this->senha;
  }
}

?>
