<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
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
      
    <div class="container" >
      <div ></div>
        <div class="py-5 text-left">
          <img class="d-block mx-auto mb-4" src="../imgLogin/Logo BMW.png" alt="" width="90" height="90">
          <h2>Formulário de Cadastro</h2>
        </div>
  
        <div class="row">

          <div class="col-md-12 order-md-1">
            <form class="needs-validation" novalidate>
              <div class="row">
                <div class="col-md-4 mb-3">
                  <label for="primeiroNome">Nome</label>
                  <input type="text" class="form-control" id="primeiroNome" placeholder="Eduardo Alexandre" value="" required>
                  <div class="invalid-feedback">
                    É obrigatório inserir um nome válido.
                  </div>
                </div>
                <div class="col-md-4 mb-3">
                  <label for="sobrenome">CPF</label>
                  <input type="number" class="form-control" id="CPF" placeholder="XXX.XXX.XXX-XX" value="" required>
                  <div class="invalid-feedback">
                    É obrigatório inserir um CPFválido.
                  </div>
                </div>
                <div class="col-md-4 mb-3">
                  <label for="sobrenome">Data de nascimento</label>
                  <input type="date" class="form-control" id="CPF"  value="" required>
                  <div class="invalid-feedback">
                    É obrigatório inserir um CPFválido.
                  </div>
                </div>
              </div>
  
              <div class="mb-3">
                <label for="nickname">CEP</label>
                <div class="input-group">
                  <input type="text" class="form-control" id="CEP" placeholder="CEP" required>
                  <div class="invalid-feedback" style="width: 100%;">
                    Seu nickname é obrigatório.
                  </div>
                </div>
              </div>
  
              <div class="mb-3">
                <label for="email">N°</label>
                <input type="email" class="form-control" id="numeroCasa" placeholder="291">
                <div class="invalid-feedback">
                  Por favor, insira um endereço de e-mail válido, para atualizações de entrega.
                </div>
              </div>
  
              <div class="mb-3">
                <label for="endereco">Telefone</label>
                <input type="text" class="form-control" id="telefone" placeholder="99 9999-9999" required>
                <div class="invalid-feedback">
                  Por favor, insira seu endereço de entrega.
                </div>
              </div>
                
              <button class="btn btn-primary btn-lg btn-block" type="submit">Cadastrar</button>
            </form>
              <hr class="mb-4">
              <table class="table table-hover table-dark">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Primeiro</th>
                    <th scope="col">Último</th>
                    <th scope="col">Nickname</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td colspan="2">Larry the Bird</td>
                    <td>@twitter</td>
                  </tr>
                </tbody>
              </table>
              <hr class="mb-4">

          </div>
        </div>  
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


  </body>
</html>