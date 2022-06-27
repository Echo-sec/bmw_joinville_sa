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
        <div ></div>
          <div class="py-5 text-left">
            <img class="d-block mx-auto mb-4" src="imgLogin/Logo BMW.png" alt="" width="72" height="72">
            <h2>Cadastro de usuário</h2>
          </div>
    
          <div class="row">
  
            <div class="col-md-12 order-md-1">
              <form class="needs-validation" novalidate>
                <div class="row">
                  
                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="senha">Senha</label>
                    <input type="text" class="form-control" id="senha" value="" required>
                    <div class="invalid-feedback">
                      É obrigatório inserir uma senha válida.
                    </div>
                  </div>

                  <div class="col-md-6 mb-3">
                    <label for<div class="col-md-6 mb-3">
                    <label for="primeiroNome">Nome</label>
                    <input type="text" class="form-control" id="primeiroNome" placeholder="Pedrinho" value="" required>
                    <div class="invalid-feedback">
                      É obrigatório inserir um nome válido.
                    </div>="cargo">Cargo</label>
                    <select class="form-select" aria-label="Default select example">
                        <option value="1">Vendedor</option>
                        <option value="2">Fechador</option>
                    </select>
                  </div>
                
                <div class="col-md-6 mb-3">
                  <label for="nickname">Nome de usuário</label>
                  <div class="input-group">
                    <input type="text" class="form-control" id="nickname" required>
                    <div class="invalid-feedback" style="wi dth: 100%;">
                      Seu nickname é obrigatório.
                    </div>
                  </div>
                </div>
                </div>

                <div class="">
                    <label for="primeiroNome">Nome</label>
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