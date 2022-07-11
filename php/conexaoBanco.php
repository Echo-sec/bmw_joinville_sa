<?php

$usuario="root";
$senha="";
$local="127.0.0.1";
$banco="BMW";

$conexao=mysqli_connect($local,$usuario,$senha,$banco);
mysqli_set_charset($conexao,"utf8");

?>
