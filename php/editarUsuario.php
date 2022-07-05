<?php
require_once("conexaoBanco.php");

$idUsuario = $_POST['idUsuario'];

$user = $_POST['user'];
$senha = $_POST['senha'];
$cargo = $_POST['cargo'];
$nomeUser = $_POST['nomeUser'];



$comando = "UPDATE  usuarios set nomeUsuario='".$user."', senha='".$senha."', nivel='".$cargo."', nomeCompleto= '".$nomeUser."' where idUsuario=".$idUsuario;
                                                                                          
//  echo $comando;

$resultado = mysqli_query($conexao, $comando);

if($resultado==true){
    header("Location: cadastroUsuarioForm.php?retorno=4");
}else{
    header("Location: cadastroUsuarioForm.php?retorno=5");
}

