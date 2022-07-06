<?php 
require_once("conexaoBanco.php");

$nome=$_POST['nome'];
$data=$_POST['data'];
$carro=$_POST['carro'];
$horario=$_POST['time'];
$texto=$_POST['obs'];
$usuario=$_SESSION['idUsuario'];


// echo $nome;
// echo "<br>";
// echo $data;
// echo "<br>";
// echo $carro;
// echo "<br>";
// echo $horario;
// echo "<br>";
// echo $texto;




$comando="INSERT INTO agendamentos (data, hora, clientes_idCliente, usuarios_idUsuario, carro_idCarro, detalhes) VALUES
('".$data."',
'".$horario."',
'".$nome."',
'".$usuario."',
'".$carro."',
'".$texto."')
";

echo $comando;




?>