<?php
require_once("conexaoBanco.php");


$idCliente=$_POST['idCliente'];

$comandoExclusao="DELETE FROM clientes WHERE idCliente=".$idCliente;
$resultadoExclusao=mysqli_query($conexao,$comandoExclusao);

if($resultadoExclusao){
    header("Location: cadastroClienteForm.php?retorno=2");
}
    else{
//a pessoa não pode ser excluída
header("Location: cadsatroClienteForm.php?retorno=3");
}