<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../css/visualizar.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <title>Visualizar</title>
</head>

<body>

<?php
require_once "../../classes/session.php";
require_once "../../classes/visualizar.php";

session_start();

// Instancie a classe Visualizar
$visualizar = new Visualizar();

// Chame o método buscarUltimasConsultas() para obter as últimas consultas
$ultimasConsultas = $visualizar->buscarUltimasConsultas(10, $_SESSION["id"]);
$consulta = $visualizar->buscarConsultas($_SESSION["id"]);
?>
  <div class="header">
    <nav class="navbar navbar-expand-xl navbar-light">
      <div class="container-fluid">
        <div class="logo">
          <a href="home.html">
            <img id="logo" src="../../imagens/icone_hospital2.png" alt="Imagem">
            <span id="nome-hospital"><span id="h">H</span>ospital Liberdade</span>
          </a>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active content-nav" href="home.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link content-nav" href="marcar_consulta.php">Marcar consulta</a>
            </li>
            <li class="nav-item">
              <a class="nav-link content-nav" href="visualizar.php">Visualizar consulta</a>
            </li>
            <li class="nav-item">
              <a class="nav-link content-nav" href="../../classes/logout.php">Sair</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>


  <div class="header-img">
    <img src="../../imagens/img_1.jpg" class="d-block w-100" alt="...">
  </div>

  <section>
    <h2 style="margin-top: 20px; color:#0077CC;">Consulta Médica</h2>
    <table>
      <thead>
        <tr>
          <th>Data</th>
          <th>Hora</th>
          <th>Especialidade</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
  <?php foreach ($ultimasConsultas as $consulta): ?>
    <tr>
      <td><?php echo $consulta["dt"]; ?></td>
      <td><?php echo $consulta["horario"]; ?></td>
      <td><?php echo $consulta["especialidade"]; ?></td>
      <td><a href="../../classes/excluirConsulta.php" class="botao-especialidade">Cancelar</a></td>
    </tr>
  <?php endforeach; ?>
</tbody>
    </table>
  </section>


  <div class="container">
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
      <div class="col-md-4 d-flex align-items-center">
        <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
          <svg class="bi" width="30" height="24">
            <use xlink:href="#bootstrap" />
          </svg>
        </a>
        <span class="text-muted">&copy; 2021 Company, Inc</span>
      </div>

      <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
        <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24">
              <use xlink:href="#twitter" />
            </svg></a></li>
        <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24">
              <use xlink:href="#instagram" />
            </svg></a></li>
        <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24">
              <use xlink:href="#facebook" />
            </svg></a></li>
      </ul>
    </footer>
  </div>
</body>

</html>