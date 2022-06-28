<?php
require_once("conexaoBanco.php");

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$cep = $_POST['cep'];
$numCasa = $_POST['numCasa'];
$dataNasc = $_POST['dataNasc'];
$tel = $_POST['telefone'];


$comando = "INSERT INTO clientes (nomeCompleto, cpf, cep, numero, dataNascimento, telefone) VALUES
  ('".$nome."','".$cpf."','".$cep."',".$numCasa.", '".$dataNasc."', '".$tel."')";

// echo $comando;

$resultado = mysqli_query($conexao, $comando);

if($resultado==true){
    header("Location: cadastroClienteForm.php?retorno=1");
}else{
    header("Location: cadastroClienteForm.php?retorno=0");
}

?>