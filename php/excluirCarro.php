<?php
require_once("conexaoBanco.php");


$idCarro=$_POST['idCarro'];

$comandoExclusao="DELETE FROM carros WHERE idCarro=".$idCarro;
$resultadoExclusao=mysqli_query($conexao,$comandoExclusao);

if($resultadoExclusao){
    header("Location: cadastroDeCarrosForm.php?retorno=2");
}
    else{
header("Location: cadastroDeCarrosForm.php?retorno=3");
}