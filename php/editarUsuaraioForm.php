<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="../CSS/style.css">
  <title>Edição de Usuários</title>
</head>

<body>

<?php include("menuDiretor.php"); ?>

    <div class="container">
    <div></div>
    <div class="py-5 text-left">
      <img class="d-block mx-auto mb-4" src="../imgLogin/Logo BMW.png" alt="" width="90" height="90">
      <h2>Formulário Edição</h2>
    </div>
    <?php
		require_once("conexaoBanco.php");

		$idUsuario = $_POST['idUsuario'];
		$comando="SELECT * FROM usuarios WHERE idUsuario=".$idUsuario;
		$resultado=mysqli_query($conexao,$comando);
		$c=mysqli_fetch_assoc($resultado);
        // echo $comando;

	?>  


<div class="container" >
        <div class="row">

          <div class="col-md-12 order-md-1">
          <form class="needs-validation" method="POST" novalidate action="editarUsuario.php" >
            <input type="hidden" name="idUsuario" value="<?=$c['idUsuario']?>">
              <div class="row">
                <div class="col-md-6 mb-3">
                  <label for="primeiroNome">Nome de usuário</label>
                  <input type="text" class="form-control" id="primeiroNome" name="user" value="<?=$c['nomeUsuario']?>" placeholder="Pedrinho" required>
                  <div class="invalid-feedback">
                    É obrigatório inserir um nome válido.
                  </div>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="senha">Senha</label>
                  <input type="text" class="form-control" id="senha" name="senha" value="<?=$c['senha']?>"required>
                  <div class="invalid-feedback">
                    É obrigatório inserir uma senha válida.
                  </div>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="sobrenome">Cargo</label>
                    <select class="form-select" aria-label="Default select example" name="cargo" value="<?=$c['nivel']?>">
                        <option value="1">Diretor</option>
                        <option value="2">Vendedor</option>
                        <option value="3">Fechador</option>
                    </select>
                </div>

                <div class="col-md-6 mb-3">
                <label for="nickname">Nome Completo</label>
                <div class="input-group">
                  <input type="text" class="form-control" id="nickname" name="nomeUser" value="<?=$c['nomeCompleto']?>" required>
                  <div class="invalid-feedback" style="width: 100%;">
                    Seu nickname é obrigatório.
                  </div>
                </div>
              </div>
              </div>
              <button class="btn btn-primary btn-lg btn-block" type="submit">Editar</button>
              <div class="col-md-12 order-md-1">
              </div>
            </form> 
              <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>


</body>

</html>