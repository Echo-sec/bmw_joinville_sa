<?php require_once("conexaoBanco.php");

$agendamento = $_POST['agendamento'];
$status = $_POST['status'];
$valor = $_POST['valor'];
session_start();
$usuario=$_SESSION['idUsuario'];
$texto=$_POST['obs'];


// echo $agendamento;
// echo "<br>";
// echo $status;
// echo "<br>";
// echo $valor;
// echo "<br>";
// echo $usuario;
// echo "<br>";
// echo $texto;
// echo "<br>";


$comando="INSERT INTO fechamentos (status, valor, observacao, agendamentos_idAgendamento, fechador) VALUES
('".$status."',
'".$valor."',
'".$texto."',
'".$agendamento."',
'".$usuario."')
";

echo $comando;

$resultado=mysqli_query($conexao,$comando);

if($resultado==true){
    header("Location: telaFechamentoForm.php?retorno=1");
}else{
    header("Location: telaFechamentoForm.php?retorno=0");
}


?>