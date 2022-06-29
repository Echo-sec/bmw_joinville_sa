<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/style.css">
  <title>Edição de clientes</title>
</head>

<body>

<?php include("menuVendedor.php"); ?>

    <div class="container">
    <div></div>
    <div class="py-5 text-left">
      <img class="d-block mx-auto mb-4" src="../imgLogin/Logo BMW.png" alt="" width="90" height="90">
      <h2>Formulário Edição</h2>
    </div>
    <?php
		require_once("conexaoBanco.php");

		$idCliente = $_POST['idCliente'];
		$comando="SELECT * FROM clientes WHERE idCliente=".$idCliente;
		$resultado=mysqli_query($conexao,$comando);
		$c=mysqli_fetch_assoc($resultado);
        // echo $comando;

	?>  
    <div class="row">

      <div class="col-md-12 order-md-1">
        <form class="needs-validation" action="cadastroCliente.php" method="POST" novalidate>
        <input type="hidden" name="idCliente" value="<?=$c['idCliente']?>">
          <div class="row">
            <div class="col-md-4 mb-3">
              <label for="primeiroNome">Nome</label>
              <input type="text" class="form-control" value="<?=$c['nomeCompleto']?>" name="nome" id="nome">
              <div class="invalid-feedback">
                É obrigatório inserir um nome válido.
              </div>
            </div>
            <div class="col-md-4 mb-3">
              <label for="sobrenome">CPF</label>
              <input type="number" class="form-control" value="<?=$c['cpf']?>" name="cpf" id="CPF" placeholder="XXX.XXX.XXX-XX" value=""
                required>
              <div class="invalid-feedback">
                É obrigatório inserir um CPF válido.
              </div>
            </div>
            <div class="col-md-4 mb-3">
              <label for="sobrenome">Data de nascimento</label>
              <input type="date" class="form-control" value="<?=$c['dataNascimento']?>" name="dataNasc" id="CPF" value="" required>
              <div class="invalid-feedback">
                É obrigatório inserir uma data de nascimento.
              </div>
            </div>
          </div>

          <div class="mb-3">
            <label for="nickname">CEP</label>
            <div class="input-group">
              <input type="text" class="form-control" id="CEP" value="<?=$c['cep']?>" name="cep" placeholder="CEP" required>
              <div class="invalid-feedback" style="width: 100%;">
                Seu CEP é obrigatório.
              </div>
            </div>
          </div>

          <div class="mb-3">
            <label for="email">N°</label>
            <input type="email" class="form-control" id="numeroCasa" value="<?=$c['numero']?>" name="numCasa" placeholder="291">
            <div class="invalid-feedback">
              Por favor, insira um número de casa
            </div>

            <div class="mb-3">
              <label for="endereco">Telefone</label>
              <input type="text" class="form-control" id="telefone" value="<?=$c['telefone']?>" name="telefone" placeholder="99 9999-9999" required>
              <div class="invalid-feedback">
                Por favor, insira seu telefone
              </div>
            </div>

            <button class="btn btn-primary btn-lg btn-block" type="submit">Cadastrar</button>
        </form>

      
       
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>


</body>

</html>