<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="../CSS/style.css">
  <title>Edição de Carros</title>
</head>

<body>

<?php include("menuVendedor.php"); ?>

<div class="container">
    <div class="py-5 text-left">
      <h2>Formulário Edição</h2>
    </div>
    <?php
		require_once("conexaoBanco.php");

		$idCarro = $_POST['idCarro'];
		$comando="SELECT * FROM carros WHERE idCarro=".$idCarro;
		$resultado=mysqli_query($conexao,$comando);
		$c=mysqli_fetch_assoc($resultado);
        // echo $comando;

	?>  

<div class="container" >
        <div class="py-5 text-left">
          <img class="d-block mx-auto mb-4" src="../imgLogin/Logo BMW.png" alt="" width="90" height="90">
        </div>
  
        <div class="row">

          <div class="col-md-12 order-md-1">
            <form class="needs-validation" method="POST" action="editarCarro.php" novalidate>
            <input type="hidden" name="idCarro" value="<?=$c['idCarro']?>">
              <div class="row">
                <div class="col-md-6 mb-3">
                  <label for="carro">Nome</label>
                  <input type="text" class="form-control" id="carro" name="nome" value="<?=$c['nome']?>" required>
                  <div class="invalid-feedback">
                    É obrigatório inserir um nome válido.
                  </div>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="ano">Ano</label>
                  <input type="text" class="form-control" id="ano" name="ano" value="<?=$c['ano']?>" required>
                  <div class="invalid-feedback">
                    É obrigatório inserir um ano válido.
                  </div>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="modelo">Modelo</label>
                    <select class="form-select" aria-label="Default select example" name="modelo">
                    <?php
                    if($c['modelo']=='1'){
                       
                    echo '<option value="1" selected>SUV</option>';
                    echo '<option value="2">Sedan</option>';
                    echo '<option value="3">Hatch</option>';

                    }elseif ($c['modelo']=='2'){
                        echo '<option value="1" >SUV</option>';
                        echo '<option value="2" selected>Sedan</option>';
                        echo '<option value="3">Hatch</option>';
  
                    }else{
                        echo '<option value="1" >SUV</option>';
                        echo '<option value="2" >Sedan</option>';
                        echo '<option value="3" selected>Hatch</option>';
                    }
                    ?>
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                <label for="placa">Placa</label>
                <div class="input-group">
                  <input type="text" class="form-control" id="placa" required name="placa" value="<?=$c['placa']?>">
                  <div class="invalid-feedback" style="width: 100%;">
                    Insira uma placa válida.
                  </div>
                </div>
              </div>
              <div class="col-md-6 mb-3">
                    <label for="chassi">Chassi</label>
                    <input type="text" class="form-control" id="chassi" required name="chassi"value="<?=$c['chassi']?>" >
                    <div class="invalid-feedback">
                        É obrigatório inserir um número de chassi válido.
                </div>
              </div>
              </div>
              <button class="btn btn-primary btn-lg btn-block" type="submit">Editar</button>
              <div class="col-md-12 order-md-1">
                </div>
                </div>
            </div>
            </form>