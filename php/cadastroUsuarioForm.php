<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>


<div id="alertas">
  <?php if(isset($_GET['retorno'])==true && $_GET['retorno']==0){ ?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
      <span>Houve algum problema ao a cadastrar o usuário!</span>
      <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
    <?php }else if(isset($_GET['retorno'])==true && $_GET['retorno']==1) {?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <span>Usuário cadastrado com sucesso!</span>
      <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
    <?php }else if(isset($_GET['retorno'])==true && $_GET['retorno']==2){ ?>
	<div class="alert alert-success alert-dismissible fade show" role="alert">
        <span>Usuario excluído com sucesso!</span>
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
	<?php }else if(isset($_GET['retorno'])==true && $_GET['retorno']==3){ ?>
	<div class="alert alert-warning alert-dismissible fade show" role="alert">
        <span>Não é possível excluir o usuário!</span>
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
	<?php }else if(isset($_GET['retorno'])==true && $_GET['retorno']==4){ ?>
	<div class="alert alert-success alert-dismissible fade show" role="alert">
        <span>Pessoa editada com sucesso!</span>
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
	<?php }else if(isset($_GET['retorno'])==true && $_GET['retorno']==5){ ?>
	<div class="alert alert-warning alert-dismissible fade show" role="alert">
		<span>Houve algum problema editar a pessoa!</span>
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>

	<?php } ?>
</div>
      
    <div class="container" >
        <div class="py-5 text-left">
          <img class="d-block mx-auto mb-4" src="../imgLogin/Logo BMW.png" alt="" width="90" height="90">
          <h2>Cadastro de Usuário</h2>
        </div>
  
        <div class="row">

          <div class="col-md-12 order-md-1">
            <form class="needs-validation" method="POST" novalidate action="cadastroUsuario.php" >
              <div class="row">
                <div class="col-md-6 mb-3">
                  <label for="primeiroNome">Nome de usuário</label>
                  <input type="text" class="form-control" id="primeiroNome" name="user" placeholder="Pedrinho" required>
                  <div class="invalid-feedback">
                    É obrigatório inserir um nome válido.
                  </div>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="senha">Senha</label>
                  <input type="text" class="form-control" id="senha" name="senha" required>
                  <div class="invalid-feedback">
                    É obrigatório inserir uma senha válida.
                  </div>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="sobrenome">Cargo</label>
                    <select class="form-select" aria-label="Default select example" name="cargo">
                        <option value="1">Vendedor</option>
                        <option value="2">Fechador</option>
                    </select>
                </div>

                <div class="col-md-6 mb-3">
                <label for="nickname">Nome Completo</label>
                <div class="input-group">
                  <input type="text" class="form-control" id="nickname" name="nomeUser" required>
                  <div class="invalid-feedback" style="width: 100%;">
                    Seu nickname é obrigatório.
                  </div>
                </div>
              </div>
              </div>
              <button class="btn btn-primary btn-lg btn-block" type="submit">Cadastrar</button>
              <div class="col-md-12 order-md-1">
                <div class="col-md-6 mb-3">
                    <label for="primeiroNome">Nome</label>
                    <input type="text" class="form-control" id="primeiroNome" placeholder="Pedrinho" required>
                    <div class="invalid-feedback">
                        É obrigatório inserir um nome válido.
                </div>
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
                <tr>
            <?php
                require_once("conexaoBanco.php");
                $comando="SELECT idUsuario, nomeUsuario, nivel, nomeCompleto from usuarios";
                 if(isset($_GET['pesquisa']) && $_GET['pesquisa']!=""){
                     $comando.=" WHERE nomeCompleto LIKE '".$_GET['pesquisa']."%'";
                 }
                 $resultado=mysqli_query($conexao, $comando);
                 $usuarios=array();
                 $linhas=mysqli_num_rows($resultado);
                 if($linhas==0){
                  echo "<tr><td colspan='6'>Nenhum Cliente encontrado</td></tr>";
                      }else{
                          while($c = mysqli_fetch_assoc($resultado)){
                                array_push($usuarios, $c);
                        }

                      foreach($usuarios as $c){
                          echo "<td>".$c['nomeUsuario']."</td>";
                          echo "<td>".$c['nivel']."</td>";
                          echo "<td>".$c['nomeCompleto']."</td>";

                         ?>

          
              <td>
          <form action="editarUsuaraioForm.php" method="POST" class="formAcao">
            <input type="hidden" name="idUsuario" value="<?=$c['idUsuario']?>">
            <button type="submit" class="botaoAcao">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
              </svg>
            </button>				
          </form>
          <form action="excluirUsuario.php" method="POST" class="formAcao">
            <input type="hidden" name="idUsuario" value="<?=$c['idUsuario']?>">
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
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>