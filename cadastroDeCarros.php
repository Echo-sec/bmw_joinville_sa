<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
      
    <div class="container" >
        <div class="py-5 text-left">
          <img class="d-block mx-auto mb-4" src="imgLogin/Logo BMW.png" alt="" width="90" height="90">
          <h2>Cadastro de Carros</h2>
        </div>
  
        <div class="row">

          <div class="col-md-12 order-md-1">
            <form class="needs-validation" novalidate>
              <div class="row">
                <div class="col-md-6 mb-3">
                  <label for="carro">Carro</label>
                  <input type="text" class="form-control" id="carro" required>
                  <div class="invalid-feedback">
                    É obrigatório inserir um nome válido.
                  </div>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="ano">Ano</label>
                  <input type="text" class="form-control" id="ano" required>
                  <div class="invalid-feedback">
                    É obrigatório inserir um ano válido.
                  </div>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="modelo">Modelo</label>
                    <select class="form-select" aria-label="Default select example">
                        <option value="1">SUV</option>
                        <option value="2">Sedan</option>
                        <option value="3">Hatch</option>
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                <label for="placa">Placa</label>
                <div class="input-group">
                  <input type="text" class="form-control" id="placa" required>
                  <div class="invalid-feedback" style="width: 100%;">
                    Insira uma placa válida.
                  </div>
                </div>
              </div>
              <div class="col-md-6 mb-3">
                    <label for="chassi">Chassi</label>
                    <input type="text" class="form-control" id="chassi" required>
                    <div class="invalid-feedback">
                        É obrigatório inserir um número de chassi válido.
                </div>
              </div>
              <div class="col-md-12 order-md-1">
                
                <div class="col-md-6 mb-3">
                    <button>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                        </svg>
                    </button>
                </div>
              </div>
             
            </form>
            <hr class="mb-4">
              <table class="table table-hover table-dark">
                <thead>
                  <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Cargo</th>
                    <th scope="col">Nome usuário</th>
                    <th scope="col">Ações</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">Eduardo</th>
                    <td>Vendedor</td>
                    <td>Montanha</td>
                    <td></td>
                  </tr>
                  <tr>
                    <th scope="row">João</th>
                    <td>Vendedor</td>
                    <td>Pirikito</td>
                    <td></td>
                  </tr>
                  <tr>
                    <th scope="row">Lucas</th>
                    <td>Fechador</td>
                    <td>Mioti</td>
                    <td></td>

                  </tr>
                </tbody>
              </table>
              <hr class="mb-4">
            
            </div>
          </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>