<?php
require_once("conexaoBanco.php");

$idCliente = $_POST['idCliente'];

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$cep = $_POST['cep'];
$numCasa = $_POST['numCasa'];
$dataNasc = $_POST['dataNasc'];
$tel = $_POST['telefone'];



$comando = "UPDATE  clientes set nomeCompleto='".$nome."', cpf='".$cpf."', cep='".$cep."', numero=".$numCasa.", dataNascimento='".$dataNasc."', telefone='".$tel."' where idCliente=".$idCliente;
                                                                                          
//  echo $comando;

$resultado = mysqli_query($conexao, $comando);

if($resultado==true){
    header("Location: cadastroClienteForm.php?retorno=4");
}else{
    header("Location: cadastroClienteForm.php?retorno=5");
}




?>