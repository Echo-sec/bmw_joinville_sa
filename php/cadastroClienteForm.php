<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/style.css">
  <title>Cadastro de clientes</title>
</head>

<div id="alertas">
  <?php if(isset($_GET['retorno'])==true && $_GET['retorno']==0){ ?>
  <div class="alert alert-warning alert-dismissible fade show" role="alert">
    <span>Houve algum problema ao a cadastrar o cliente!</span>
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
  </div>
  <?php }else if(isset($_GET['retorno'])==true && $_GET['retorno']==1) {?>
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    <span>Cliente cadastrado com sucesso!</span>
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
  </div>
  <?php } ?>


</div>

<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="../imgLogin/Logo Bmw.png" alt="..." height="55">
          Bmw Joinville
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
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
    <div class="py-5 text-left">
      <img class="d-block mx-auto mb-4" src="../imgLogin/Logo BMW.png" alt="" width="90" height="90">
      <h2>Formulário de Cadastro</h2>
    </div>

    <div class="row">

      <div class="col-md-12 order-md-1">
        <form class="needs-validation" action="cadastroCliente.php" method="POST" novalidate>
          <div class="row">
            <div class="col-md-4 mb-3">
              <label for="primeiroNome">Nome</label>
              <input type="text" class="form-control" name="nome" id="primeiroNome" placeholder="Eduardo Alexandre"
                value="" required>
              <div class="invalid-feedback">
                É obrigatório inserir um nome válido.
              </div>
            </div>
            <div class="col-md-4 mb-3">
              <label for="sobrenome">CPF</label>
              <input type="number" class="form-control" name="cpf" id="CPF" placeholder="XXX.XXX.XXX-XX" value=""
                required>
              <div class="invalid-feedback">
                É obrigatório inserir um CPF válido.
              </div>
            </div>
            <div class="col-md-4 mb-3">
              <label for="sobrenome">Data de nascimento</label>
              <input type="date" class="form-control" name="dataNasc" id="CPF" value="" required>
              <div class="invalid-feedback">
                É obrigatório inserir uma data de nascimento.
              </div>
            </div>
          </div>

          <div class="mb-3">
            <label for="nickname">CEP</label>
            <div class="input-group">
              <input type="text" class="form-control" id="CEP" name="cep" placeholder="CEP" required>
              <div class="invalid-feedback" style="width: 100%;">
                Seu CEP é obrigatório.
              </div>
            </div>
          </div>

          <div class="mb-3">
            <label for="email">N°</label>
            <input type="email" class="form-control" id="numeroCasa" name="numCasa" placeholder="291">
            <div class="invalid-feedback">
              Por favor, insira um número de casa
            </div>

            <div class="mb-3">
              <label for="endereco">Telefone</label>
              <input type="text" class="form-control" id="telefone" name="telefone" placeholder="99 9999-9999" required>
              <div class="invalid-feedback">
                Por favor, insira seu telefone
              </div>
            </div>

            <button class="btn btn-primary btn-lg btn-block" type="submit">Cadastrar</button>
        </form>

        <form action="#" method="GET" class="formAcao">
          <div class="form-group">
            <label class="control-label" for="textoPesquisa">Descrição </label>
            <input class="form-control" id="textoPesquisa" type="text" name="pesquisa">
            <button type="submit" class="botaoAcao">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search"
                viewBox="0 0 16 16">
                <path
                  d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
              </svg>
            </button>
          </div>
        </form>
        <hr class="mb-4">
        <table class="table table-hover table-dark">
          <thead>
            <tr>
              <th scope="col">Nome</th>
              <th scope="col">CPF</th>
              <th scope="col">Data Nascimento</th>
              <th scope="col">Ações</th>
            </tr>
          </thead>

          <tr>
            <?php
                require_once("conexaoBanco.php");
                $comando="SELECT idCliente, nomeCompleto, cpf, dataNascimento from clientes";
                 if(isset($_GET['pesquisa']) && $_GET['pesquisa']!=""){
                     $comando.=" WHERE nomeCompleto LIKE '".$_GET['pesquisa']."%'";
                 }
                 $resultado=mysqli_query($conexao, $comando);
                 $clientes=array();
                 $linhas=mysqli_num_rows($resultado);
                 if($linhas==0){
                  echo "<tr><td colspan='6'>Nenhum Cliente encontrado</td></tr>";
              }else{
                  while($c = mysqli_fetch_assoc($resultado)){
                         array_push($clientes, $c);
                 }
              

              foreach($clientes as $c){
                  echo "<td>".$c['nomeCompleto']."</td>";
                  echo "<td>".$c['cpf']."</td>";
                  echo "<td>".date('d/m/Y', strtotime($c['dataNascimento']))."</td>";
         ?>

          
              <td>
          <form action="editarClienteForm.php" method="POST" class="formAcao">
            <input type="hidden" name="idComp" value="<?=$c['idCliente']?>">
            <button type="submit" class="botaoAcao">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
              </svg>
            </button>				
          </form>
          <form action="excluirCliente.php" method="POST" class="formAcao">
            <input type="hidden" name="idComp" value="<?=$c['idCliente']?>">
            <button type="submit" class="botaoAcao">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
              <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/>
              </svg>
            </button>				
          </form>
          </td>
              </tr>
          <?php } //fechamento foreach
                } //fechamento else
                ?>

        </table>
      </div>
    </div>
    </table>
    <hr class="mb-4">



  </div>
  </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>


</body>

</html>