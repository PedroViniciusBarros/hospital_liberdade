<?php
class Banco
{
  private string $host = "localhost";
  private string $db = "crud_hospitalliberdade";
  private string $user = "root";
  private string $password = "";
  private string $dsn;

  public function __construct()
  {
    $this->dsn = "mysql:host={$this->host};dbname={$this->db};charset=UTF8";
  }

  public function conectar()
  {
    try {
      $conexao = new PDO($this->dsn, $this->user, $this->password);

      if ($conexao) {
        return $conexao;
      }
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }
}

$banco = new Banco();
$banco->conectar();

?>
