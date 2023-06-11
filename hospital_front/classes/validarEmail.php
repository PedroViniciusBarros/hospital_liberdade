<?php
require_once "cadastro_class.php";
// Verificar se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  // Criar uma instância da classe Cadastro
  $cadastro = new Cadastro();

  // Definir o valor do email usando o valor enviado pelo formulário
  $cadastro->setEmail($_POST["emal"]);

  if ($cadastro->buscar() !== false) {
    echo '<script>alert("Email já existe!")</script>';
  } else {
    // Definir os valores usando os setters
    $cadastro->setNome($_POST["nome"]);
    $cadastro->setCpf($_POST["cpf"]);
    $cadastro->setDtNascimento($_POST["nasc"]);
    $cadastro->setSexo($_POST["Sexo"]);
    $cadastro->setCelular($_POST["tel"]);
    $cadastro->setSenha($cadastro->codificaSenha($_POST["senha"]));

    $cadastro->cadastrar();

    // Aqui você pode redirecionar para outra página, exibir uma mensagem de sucesso, etc.
    echo '<script>alert("Cadastro realizado com sucesso!")</script>';
    // Redirecionar para a página de login
    echo '<script>
          window.location.href = "../../hospital_front/src/pages/login.php";
      </script>';
    exit();
  }
}
?>
