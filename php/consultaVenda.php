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
  <title>Consulta de Vendas</title>
</head>

<body>
<?php include("menuDiretor.php") ?>

  <div class="container">
    <div></div>
    <div class="py-5 text-left text-white">
      <img class="d-block mx-auto mb-3" src="../imgLogin/Logo BMW.png" alt="" width="90" height="90">
      <h2>Consulta de Vendas</h2>
    </div>

    <div class="row">

      <div class="col-md-12 order-md-1">
        <form class="needs-validation" novalidate>
          <div class="row">
            <div class="col-md-4 mb-3">
              <label for="nomeCliente">Nome do Cliente:</label>
              <input type="text" class="form-control" id="nomeCliebte" placeholder="Eduardo Alexandre"
                required>
              <div class="invalid-feedback">
                É obrigatório inserir um nome válido.
              </div>
            </div>

            <div class="col-md-4 mb-3">
              <label for="nomeVendedor">Nome do Vendedor:</label>
              <input type="text" id="nomeVendedor" class="form-control" placeholder="Mioti" required>
            </div>

            <div class="col-md-4 mb-3">
              <label for="date">Escolha uma data:</label>
              <input type="date" id="data" class="form-control" required>
            </div>

            <div class="form-row">
              <div class="form-group col-md-4" style="width: 100%;">
                <label for="nomeFechador">Nome do Fechador:</label>
                <input type="text" id="nomeFechador" class="form-control" placeholder="João" required>  
                <br>
              </div>
            </div>
        </form>
        <div>
            <button class="btn btn-primary" type="submit">Pesquisar</button>
        </div>
       
            <div>
            <table class="table table-hover table-dark">
                <br>
                <thead>
                  <tr>
                    <th scope="col">Carro</th>
                    <th scope="col">Cliente</th>
                    <th scope="col">Data</th>
                    <th scope="col">Hora</th>
                    <th scope="col">Status</th>
                    <th scope="col">Vendedor</th>
                  </tr>
                </thead>
                <?php
                require_once("conexaoBanco.php");
                $comando="SELECT agendamentos.carros_idCarro, clientes.nomeCompleto as cliente, agendamentos.hora, agendamentos.data, fechamentos.valor, fechamentos.status, usuarios.nomeCompleto as vendedor from usuarios inner join fechamentos on usuarios.idUsuario=fechamentos.fechador inner join agendamentos on fechamentos.agendamentos_idAgendamento = agendamentos.idAgendamento INNER join clientes on clientes.idCliente=agendamentos.clientes_idCliente WHERE clientes.idCliente ='1' or usuarios.idUsuario='' or agendamentos.data= '';;";
                //  if(isset($_GET['pesquisa']) && $_GET['pesquisa']!=""){
                //      $comando.=" WHERE nomeCompleto LIKE '".$_GET['pesquisa']."%'";
                //  }
                 $resultado=mysqli_query($conexao, $comando);
                 $fechamento=array();
                 $linhas=mysqli_num_rows($resultado);
                 if($linhas==0){
                  echo "<tr><td colspan='6'>Nenhum Fechamento encontrado</td></tr>";
                      }else{
                          while($f = mysqli_fetch_assoc($resultado)){
                                array_push($fechamento, $f);
                        }

                      foreach($fechamento as $f){
                        echo "<td>".$f['carros_idCarro']."</td>";
                        echo "<td>".$f['cliente']."</td>";
                        echo "<td>".$f['data']."</td>";
                        echo "<td>".$f['hora']."</td>";
                        echo "<td>Fechado<td>";
                        echo "<td>".$f['vendedor']."</td>";
                         ?>
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
		header("Location: efetuarLogin.html");
	}

?>