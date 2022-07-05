<?php
require_once("conexaoBanco.php");

$idCarro = $_POST['idCarro'];

$nome = $_POST['nome'];
$ano = $_POST['ano'];
$modelo = $_POST['modelo'];
$placa = $_POST['placa'];
$chassi = $_POST['chassi'];




$comando = "UPDATE  carros set nome='".$nome."', ano='".$ano."', modelo='".$modelo."', placa=".$placa.", chassi='".$chassi."' where idCarro=".$idCarro;
                                                                                          
//  echo $comando;

$resultado = mysqli_query($conexao, $comando);

if($resultado==true){
    header("Location: cadastroDeCarrosForm.php?retorno=4");
}else{
    header("Location: cadastroDeCarrosForm.php?retorno=5");
}




?>