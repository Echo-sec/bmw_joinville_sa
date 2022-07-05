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
'".$placa."',
'".$chassi."')
";

echo $comando;

?>