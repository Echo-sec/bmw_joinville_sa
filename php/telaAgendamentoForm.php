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

<div id="alertas">
    <?php if(isset($_GET['retorno'])==true && $_GET['retorno']==0){ ?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <span>Houve algum problema ao agendar o compromisso!</span>
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
    <?php }else if(isset($_GET['retorno'])==true && $_GET['retorno']==1){ ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
        <span>Compromisso agendado com sucesso!</span>
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
    <?php }else if(isset($_GET['retorno'])==true && $_GET['retorno']==2){ ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
        <span>Compromisso editado com sucesso!</span>
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
    <?php }else if(isset($_GET['retorno'])==true && $_GET['retorno']==3){ ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
        <span>Houve um  problema ao editar o compromisso!</span>
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
    <?php }else if(isset($_GET['retorno'])==true && $_GET['retorno']==4){ ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
        <span>Compromisso excluído com sucesso!</span>
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
    <?php } ?>
    
</div>
<?php include("menuVendedor.php") ?>

  <div class="container">
    <div></div>
    <div class="py-5 text-left text-white">
      <img class="d-block mx-auto mb-3" src="../imgLogin/Logo BMW.png" alt="" width="90" height="90">
      <h2>Agendamento de Clientes</h2>
    </div>

    <div class="row">

      <div class="col-md-12 order-md-1">
        <form class="needs-validation" method="POST" action="agendamento.php" novalidate>
          <div class="row">
            <div class="col-md-4 mb-3" style="width: 100%;">
              <label for="primeiroNome">Nome:</label>
              <select class="form-control" name="nome" >
                <?php 
                require_once("conexaoBanco.php");
                  $sqlcliente = "SELECT * FROM clientes";
                  $query = mysqli_query($conexao, $sqlcliente);
                  $clienteArray = array();

                  while($c = mysqli_fetch_assoc($query)) {
                      array_push($clienteArray, $c);
                  }

                  foreach($clienteArray as $cliente) {
                      echo "<option value='".$cliente['idCliente']."'>".strtoupper($cliente['nomeCompleto'])."</option>";
                  }
                  
                  ?>
                </select>
              <div class="invalid-feedback">
                É obrigatório inserir um nome válido.
              </div>
            </div>

            <div class="col-md-4 mb-3" style="width: 100%;">
              <label for="sobrenome">Escolha uma data:</label>
              <input type="date" class="form-control" value="" required name="data">
            </div>



            <div class="form-row">
              <div class="form-group col-md-4" style="width: 100%;">
                <label for="inputState">Veiculo desejado:</label>
                <br>
                <select class="form-control" name="carro" >
                <?php 
                require_once("conexaoBanco.php");
                  $sqlcarros = "SELECT * FROM carros";
                  $query = mysqli_query($conexao, $sqlcarros);
                  $carrosArray = array();

                  while($c = mysqli_fetch_assoc($query)) {
                      array_push($carrosArray, $c);
                  }

                  foreach($carrosArray as $carros) {
                      echo "<option value='".$carros['idCarro']."'>".strtoupper($carros['nome'])."</option>";
                  }
                  
                  
                  ?>
                </select>
              </div>
            </div>

            <div class="col-md-5 mb-3">
              <label for="appt">Escolha um horário para sua reunião:</label>
              <br>
              <input type="time" id="appt" min="09:00" max="18:00" name="time">
            </div>
        </form>

        <div class="obs">
          <label for="exampleFormControlTextarea1">Adicione uma observação</label>
          <br>
          <textarea class="form-control" name="obs"></textarea>
        </div>

        <button type="submit" class="btn btn-lg btn-primary">Cadastrar</button>
        

      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous">
  </script>



</body>

</html>