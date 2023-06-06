<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../css/home.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body>
  <div class="header">
    <nav class="navbar navbar-expand-xl navbar-light">
      <div class="container-fluid">
        <div class="logo">
          <a href="home.php">
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
              <a class="nav-link content-nav" href="exames.php">Mostrar exames</a>
            </li>
            <li class="nav-item">
              <a class="nav-link content-nav" href="login.php">Sair</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>

  <section>
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="../../imagens/img_1.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="../../imagens/img_2.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="../../imagens/img_3.jpg" class="d-block w-100" alt="...">
        </div>
        </img>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
  </section>


  <section class="unit-section">
    <h2 class="section-title">Conheça nossas unidades</h2>

    <?php
      echo("hello php");
    ?>

    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="card">
            <img src="./imagens/Hospital-Unimed-Juiz-de-Fora-anuncia-Business-Center.png" class="card-img-top" alt="Ícone de Hospital">
            <div class="card-body">
              <h5 class="card-title">Hospital Central</h5>
              <p class="card-text">Localização: Rua Principal, 123</p>
              <p class="card-text">Cidade: São Paulo</p>
              <p class="card-text">Telefone: (11) 1234-5678</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="./imagens/divulgacao-inova-saude-800x600.png" class="card-img-top" alt="Ícone de Hospital">
            <div class="card-body">
              <h5 class="card-title">Hospital Norte</h5>
              <p class="card-text">Localização: Avenida Norte, 456</p>
              <p class="card-text">Cidade: Rio de Janeiro</p>
              <p class="card-text">Telefone: (21) 9876-5432</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="./imagens/Moinhosdevento-800x600.png" class=" card-img-top" alt="Ícone de Hospital">
            <div class="card-body">
              <h5 class="card-title">Hospital Sul</h5>
              <p class="card-text">Localização: Praça Sul, 789</p>
              <p class="card-text">Cidade: Belo Horizonte</p>
              <p class="card-text">Telefone: (31) 6543-2109</p>
            </div>
          </div>
        </div>
      </div>
    </div>
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