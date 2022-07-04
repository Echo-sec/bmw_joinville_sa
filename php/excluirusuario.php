<?php
require_once("conexaoBanco.php");


$idUsuario=$_POST['idUsuario'];

$comandoExclusao="DELETE FROM usuarios WHERE idUsuario=".$idUsuario;
$resultadoExclusao=mysqli_query($conexao,$comandoExclusao);

if($resultadoExclusao){
    header("Location: cadastroUsuarioForm.php?retorno=2");
}
    else{
//a pessoa não pode ser excluída
header("Location: cadsatroUsuarioForm.php?retorno=3");
}