<?php
require_once "banco.php";
require_once "session.php";

class Cadastro
{
  private $conexao;
  private $email;
  private $nome;
  private $senha;
  private $dt_nascimento;
  private $sexo;
  private $celular;
  private $cpf;

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
      $resultado = $consulta->fetch(PDO::FETCH_COLUMN, 0);
    } catch (Exception $erro) {
      die("Erro: " . $erro->getMessage());
    }

    return $resultado;
  }

  public function cadastrar(): void
  {
    $sql = "INSERT INTO usuario(id, Nome, Cpf, Dt_nascimento, Sexo, Celular, Email, Senha, fk_consulta) 
      VALUES(NULL, :nome, :cpf, :dt_nascimento, :sexo, :celular, :email, :senha, NULL)";

    try {
      $consulta = $this->conexao->prepare($sql);
      $consulta->bindParam(":nome", $this->nome, PDO::PARAM_STR);
      $consulta->bindParam(":email", $this->email, PDO::PARAM_STR);
      $consulta->bindParam(":senha", $this->senha, PDO::PARAM_STR);
      $consulta->bindParam(":cpf", $this->cpf, PDO::PARAM_STR);
      $this->dt_nascimento = date("Y-m-d", strtotime($this->dt_nascimento));
      $consulta->bindParam(
        ":dt_nascimento",
        $this->dt_nascimento,
        PDO::PARAM_STR
      );
      $consulta->bindParam(":sexo", $this->sexo, PDO::PARAM_STR);
      $consulta->bindParam(":celular", $this->celular, PDO::PARAM_STR);
      $consulta->execute();
    } catch (Exception $erro) {
      die("Erro: " . $erro->getMessage());
    }
  }

  public function getConexao()
  {
    return $this->conexao;
  }

  public function setConexao($conexao)
  {
    $this->conexao = $conexao;
  }

  public function getEmail()
  {
    return $this->email;
  }

  public function setEmail($email)
  {
    $this->email = filter_var($email, FILTER_SANITIZE_EMAIL);
  }

  public function getNome()
  {
    return $this->nome;
  }

  public function setNome($nome)
  {
    $this->nome = filter_var($nome, FILTER_SANITIZE_SPECIAL_CHARS);
  }

  public function getSenha()
  {
    return $this->senha;
  }

  public function setSenha($senha)
  {
    $this->senha = filter_var($senha, FILTER_SANITIZE_SPECIAL_CHARS);
  }

  public function getDtNascimento()
  {
    return $this->dt_nascimento;
  }

  public function setDtNascimento($dt_nascimento)
  {
    $this->dt_nascimento = $dt_nascimento;
  }

  public function getSexo()
  {
    return $this->sexo;
  }

  public function setSexo($sexo)
  {
    $this->sexo = $sexo;
  }

  public function getCelular()
  {
    return $this->celular;
  }

  public function setCelular($celular)
  {
    $this->celular = $celular;
  }

  public function getCpf()
  {
    return $this->cpf;
  }

  public function setCpf($cpf)
  {
    $this->cpf = $cpf;
  }

  public function codificaSenha(string $senha): string
  {
    return password_hash($senha, PASSWORD_DEFAULT);
  }
}

?>
