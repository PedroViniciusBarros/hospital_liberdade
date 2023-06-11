<?php

class Acesso
{
  //Podemos passar uma condicional para inicialização em um método construct,
  //para que seja executada assim que a classe for instanciada
  public function __construct()
  {
    //Verifica se não há existe uma sessão criada
    if (!isset($_SESSION)) {
      //Se não, ele inicia uma sessão
      session_start();
    }
  }

  //O método verificaAcesso nesse exemplo, funciona como uma validação de segurança
  //Caso algum usuário tente acessar um arquivo restrito via URL, esse método irá impedir que obtenha sucesso
  public function verificaAcesso(): void
  {
    //Verifica se não existe um valor de ID dentro da variável Super Global SESSION
    if (!isset($_SESSION["id"])) {
      //Se não existir um valor ID em SESSION, ele irá chamar a função session_destroy, que encerra a sessão
      session_destroy();
      //Após isso, ele irá redirecionar o usário para a tela de login com um aviso de acesso negado
      header("location:../login.php?acesso_negado");

      die();
    }
  }

  //O método login, nesse exeplo, enviará os dados que serão criados durante a sessão
  public function login(int $id, string $nome, string $email): void
  {
    //Nesse exemplo, estamos informando que quando uma sessão for criada, será adicionado na sessão
    //Por meio de um método login, os dados de id, nome, email e foto de perfil
    session_start();

    $_SESSION["id"] = $id;

    $_SESSION["nome"] = $nome;

    $_SESSION["email"] = $email;
  }

  //Quando o método logout for chamado, ele encerrará a sessão
  //pode vincular esse método com um botão de sair/logout, que ao clicar, executará o processo
  public function logout(): void
  {
    session_start();

    session_destroy();

    header("location:../index.php?logout");

    die(); // exit;
  }
}

?>
