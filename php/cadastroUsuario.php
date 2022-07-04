<?php
require_once("conexaoBanco.php");

$usuario=$_POST['user'];
$senha=$_POST['senha'];
$cargo=$_POST['cargo'];
$nomeUser=$_POST['nomeUser'];

$comando="INSERT INTO usuarios (nomeUsuario, senha, nivel, nomeCompleto) VALUES
('".$usuario."',
'".$senha."',
'".$cargo."',
'".$nomeUser."')
";

// echo $comando;


$resultado= mysqli_query($conexao,$comando);


$resultado = mysqli_query($conexao, $comando);

if($resultado==true){
    header("Location: cadastroUsuarioForm.php?retorno=1");
}else{
    header("Location: cadastroUsuarioForm.php?retorno=0");
}

?>