<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/telaAgendamento.css">
  <title>Fechamento de Clientes</title>
</head>
<div id="alertas">
    <?php if(isset($_GET['retorno'])==true && $_GET['retorno']==0){ ?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <span>Houve algum problema ao Fechar o agendamento!</span>
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
    <?php }else if(isset($_GET['retorno'])==true && $_GET['retorno']==1){ ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
        <span>Fechamento realizado com sucesso!</span>
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
    <?php }?>
    
</div>
<?php include("menuFechador.php")?>

    <div class="container">
    <form class="needs-validation" method="POST" action="fechamento.php" novalidate>
        <div class="py-5 text-left text-white">
            <img class="d-block mx-auto mb-3" src="../imgLogin/Logo BMW.png" alt="" width="90" height="90">
            <h2>Fechamento de Clientes</h2>
        </div>

            <div class="form-row">
                <div class="form-group col-md-4" style="width: 50%;">
                    <label for="inputState">Selecione o veículo desejado:</label>   
                    <select class="form-control" name="agendamento">
                        <option>Selecione</option>
            <?php 
                require_once("conexaoBanco.php");
                  $sqlcliente = "SELECT agendamentos.*, carros.nome, clientes.nomeCompleto FROM carros INNER JOIN agendamentos ON carros.idCarro=agendamentos.carros_idCarro INNER JOIN clientes ON clientes.idCliente=agendamentos.clientes_idCliente";
                  $sqlfechamento = "select agendamentos_idAgendamento from fechamentos";
                  $fechamentoQuery = mysqli_query($conexao, $sqlfechamento);

                  $fechamentoArray = array();
                  while($f = mysqli_fetch_assoc($fechamentoQuery)) {
                    array_push($fechamentoArray, $f);
                }
           
                  $query = mysqli_query($conexao, $sqlcliente);
                  $clienteArray = array();

                  while($c = mysqli_fetch_assoc($query)) {
                      array_push($clienteArray, $c);
                  }                
             
                  foreach($clienteArray as $cliente) {                      
                        echo "<option value='".$cliente['idAgendamento']."'>".strtoupper($cliente['nomeCompleto'])." - ".strtoupper($cliente['nome'])."-". strtoupper($cliente['data'])."</option>";
                    }
                  
                  ?>       
                    </select>
                </div>

                <div class="form-group col-md-4" style="width: 50%;">
                    <label for="inputState">Status do agendamento:</label>
                    <select class="form-control" name="status" >
                        <option>Selecione</option>
                        <option value="1">Aprovado</option>
                        <option value="2">Não aprovado</option>
                    </select>
                </div>

                <div class="col-md-4 mb-3" style="width: 50%;">
                    <label for="valor">Valor</label>
                    <input type="text" class="form-control" id="valor" name="valor" placeholder="R$ 000,00" value="0">
                </div>
                <div class="form-group col-md-4" style="width: 50%;">
                <label for="exampleFormControlTextarea1">Adicione uma observação</label>
                <br>
                <textarea class="form-control" name="obs"></textarea>
                </div>
                </form>

                <button class="btn btn-primary btn-lg btn-block" type="submit">Cadastrar</button>
            </div>
    </div>
