<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../css/marcar_consulta.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.pt-BR.min.js"></script>
  <title>Marcar Consulta</title>
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
    <div class="div-titulo-consulta">
      <h1 class="titulo-consulta">Marcar consulta</h1>
    </div>
    <div class="formulario container">
      <form action="../../classes/consulta_valid.php" method="POST">
        <div class="mb-3 div-select"> 
          <label for="especialidade" class="form-label">Especialidades</label>
          <select class="form-select" id="especialidade" name="especialidade">
            <option value="">Selecione uma opção</option>
            <option value="Cardiologia">Cardiologia</option>
            <option value="Dermatologia">Dermatologia</option>
            <option value="Ginecologia">Ginecologia</option>
            <option value="Neurologia">Neurologia</option>
            <option value="Ortopedia">Ortopedia</option>
          </select>
        </div>
        <div class="mb-3">
          <label for="data" class="form-label data-label">Data</label>
          <input id="data" type="text" name="data" class="data-marcar" />
        </div>
        <div class="mb-3">
          <label for="horario" class="form-label horario-label">Horário</label>
          <input type="time" id="horario" name="horario" list="minutos">
          <datalist id="minutos">
            <option value="00:00">
            <option value="00:30">
            <option value="01:00">
            <option value="01:30">
          </datalist>
        </div>
        <div class="botao-div">
          <button type="submit" class="btn btn-primary botao">Enviar</button>

        </div>

      </form>
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

  <script type="text/javascript">
    $(function () {
      $("#data").datepicker({
        showOn: 'button',
        buttonImage: '../../imagens/calendario_resized.png',
        buttonImageOnly: true,
        dateFormat: 'dd/mm/yy',
        dayNames: ['Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado'],
        dayNamesMin: ['D', 'S', 'T', 'Q', 'Q', 'S', 'S', 'D'],
        dayNamesShort: ['Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sáb', 'Dom'],
        monthNames: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'],
        monthNamesShort: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'],
        nextText: 'Próximo',
        prevText: 'Anterior'
      });
    });
  </script>

</body>

</html>