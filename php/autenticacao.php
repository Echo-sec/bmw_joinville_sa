<?php

require_once("conexaoBanco.php");

$user=$_POST['user'];
$senha=$_POST['senha'];

// função md5() criptografa a senha no algoritimo MD5
$senhaMD5=md5($senha);

$comando="SELECT * FROM usuarios WHERE nomeUsuario = '".$user."' AND senha = '".$senhaMD5."' ";


$resultado=mysqli_query($conexao,$comando);
// echo $comando;

$linhas=mysqli_num_rows($resultado);

if($linhas==0){
    header("Location: efetuarLogin.html");
}else{
    $usuario=mysqli_fetch_assoc($resultado);
    session_start();
    $_SESSION['idUsuario']=$usuario['idUsuario'];
    session_start();
    $_SESSION['nivel']=$usuario['nivel'];


    if($usuario['nivel']==='1'){
        header("Location: diretorPrincipal.php");
    }else if($usuario['nivel']==='2'){
        header("Location: vendedorPrincipal.php");
    }else {
            header("Location: fechadorPrincipal.php");
    }
}

?>