<?php
require_once("conexaoBanco.php");

$nome=$_POST['nome'];
$ano=$_POST['ano'];
$modelo=$_POST['modelo'];
$placa=$_POST['placa'];
$chassi=$_POST['chassi'];

$comando="INSERT INTO carros (nome, ano, modelo, chassi, placa) VALUES
('".$nome."',
'".$ano."',
'".$modelo."',
'".$chassi."',
'".$placa."')
";

echo $comando;


$resultado = mysqli_query($conexao, $comando);

if($resultado==true){
    header("Location: cadastroDeCarrosForm.php?retorno=1");
}else{
    header("Location: cadastroDeCarrosForm.php?retorno=0");
}

?>