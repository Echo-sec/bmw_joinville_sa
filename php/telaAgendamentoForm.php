<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="../CSS/telaAgendamento.css">
  <title>Cadastro de clientes</title>
</head>

<body>
<header>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="../imgLogin/Logo Bmw.png" alt="..." height="55">
        Bmw Joinville
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Menu
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Agendamentos de visita</a></li>
              <li><a class="dropdown-item" href="#">Consultas de agendamentos</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>

  <div class="container">
    <div></div>
    <div class="py-5 text-left text-white">
      <img class="d-block mx-auto mb-3" src="../imgLogin/Logo BMW.png" alt="" width="90" height="90">
      <h2>Agendamento de Clientes</h2>
    </div>

    <div class="row">

      <div class="col-md-12 order-md-1">
        <form class="needs-validation" novalidate>
          <div class="row">
            <div class="col-md-4 mb-3" style="width: 100%;">
              <label for="primeiroNome">Nome:</label>
              <input type="text" class="form-control" id="primeiroNome" placeholder="Eduardo Alexandre" value=""
                required>
              <div class="invalid-feedback">
                É obrigatório inserir um nome válido.
              </div>
            </div>

            <div class="col-md-4 mb-3" style="width: 100%;">
              <label for="sobrenome">Escolha uma data:</label>
              <input type="date" class="form-control" value="" required>
            </div>



            <div class="form-row">
              <div class="form-group col-md-4" style="width: 100%;">
                <label for="inputState">Veiculo desejado:</label>
                <br>
                <select class="form-control">
                  <option>Escolha um modelo de Carro</option>
                  <option value="1">BMW Série 1</option>
                  <option value="2">BMW X6 M Competition</option>
                  <option value="3">BMW Série 3 Sedã</option>
                  <option value="4">BMW X5</option>
                  <option value="5">BMW Série 4 Cabrio</option>
                  <option value="6">BMW X4</option>
                  <option value="6">BMW Concept XM</option>
                </select>
              </div>
            </div>

            <div class="col-md-5 mb-3">
              <label for="appt">Escolha um horário para sua reunião:</label>
              <br>
              <input type="time" id="appt" name="appt" min="09:00" max="18:00" required>
            </div>
        </form>

        <div class="obs">
          <label for="exampleFormControlTextarea1">Adicione uma observação</label>
          <br>
          <textarea class="form-control"></textarea>
        </div>
        

      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>


</body>

</html>