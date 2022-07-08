<?php
session_start();
if(isset($_SESSION['nivel']) && $_SESSION['nivel']=="1"){
?>
<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="../CSS/telaAgendamento.css">
  <title>Consulta de Fechamentos</title>
</head>

<body>
<?php include("menuDiretor.php") ?>

  <div class="container">
    <div></div>
    <div class="py-5 text-left text-white">
      <img class="d-block mx-auto mb-3" src="../imgLogin/Logo BMW.png" alt="" width="90" height="90">
      <h2>Consulta de Fechamentos</h2>
    </div>

    <div class="row">

      <div class="col-md-12 order-md-1">
        <form class="needs-validation" novalidate>
          <div class="row">
            <div class="col-md-4 mb-3">
              <label for="nomeCliente">Nome do Cliente:</label>
              <select class="form-control" name="nome" value="" >
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

            <div class="col-md-4 mb-3">
              <label for="nomeVendedor">Nome do Vendedor:</label>
              <select class="form-control" name="nome" value="" >
                <?php 
                require_once("conexaoBanco.php");
                  $sqlcliente = "SELECT * FROM usuarios where nivel ='3'";
                  $query = mysqli_query($conexao, $sqlcliente);
                  $clienteArray = array();

                  while($c = mysqli_fetch_assoc($query)) {
                      array_push($clienteArray, $c);
                  }

                  foreach($clienteArray as $cliente) {
                      echo "<option value='".$cliente['idUsuario']."'>".strtoupper($cliente['nomeCompleto'])."</option>";
                  }
                  
                  ?>
                </select>
            </div>

            <div class="col-md-4 mb-3">
              <label for="date">Escolha uma data:</label>
              <input type="date" id="data" value="" name="data" class="form-control" required>
            </div>
            
        </form>
        <div>
            <button class="btn btn-primary" name="pesquisa" value="" type="submit">Pesquisar</button>
        </div>
       
            <div>
            <table class="table table-hover table-dark">
                <br>
                <thead>
                  <tr>
                    <th scope="col">Carro</th>
                    <th scope="col">Cliente</th>
                    <th scope="col">Data</th>
                    <th scope="col">Valor</th>
                    <th scope="col">Status</th>
                    <th scope="col">Vendedor</th>
                  </tr>
                </thead>
                <tr>
            <?php
                require_once("conexaoBanco.php");
                $comando="SELECT agendamentos.carros_idCarro, clientes.nomeCompleto as cliente, agendamentos.data, fechamentos.valor, fechamentos.status, usuarios.nomeCompleto as vendedor from usuarios inner join fechamentos on usuarios.idUsuario=fechamentos.fechador inner join agendamentos on fechamentos.agendamentos_idAgendamento = agendamentos.idAgendamento INNER join clientes on clientes.idCliente=agendamentos.clientes_idCliente WHERE clientes.idCliente =  or usuarios.idUsuario= or agendamentos.data= '2022-05-17'";
                 if(isset($_GET['pesquisa']) && $_GET['pesquisa']!=""){
                     $comando.=" WHERE nomeCompleto LIKE '".$_GET['pesquisa']."%'";
                 }
                 $resultado=mysqli_query($conexao, $comando);
                 $fechamento=array();
                 $linhas=mysqli_num_rows($resultado);
                 if($linhas==0){
                  echo "<tr><td colspan='6'>Nenhum Fechamento encontrado</td></tr>";
                      }else{
                          while($c = mysqli_fetch_assoc($resultado)){
                                array_push($fechamento, $c);
                        }

                      foreach($clientes as $c){

                         ?>

          
              <td>

                      </tr>
                      </td>
                      <?php } //fechamento foreach
                } //fechamento else
                ?>
              </table>
            </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous">
  </script>
</body>
</html>
<?php
	}else{
		header("Location: alertaEfetuarLogin.html");
	}

?>