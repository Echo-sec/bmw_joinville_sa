<?php



require_once("conexaoBanco.php");
                  $sqlcliente = "SELECT agendamentos.*, carros.nome, clientes.nomeCompleto FROM carros INNER JOIN agendamentos ON carros.idCarro=agendamentos.carros_idCarro INNER JOIN clientes ON clientes.idCliente=agendamentos.clientes_idCliente";
                  $sqlfechamento = "select agendamentos_idAgendamento as id from fechamentos";
                  $fechamentoQuery = mysqli_query($conexao, $sqlfechamento);

                  $fechamentoArray = array();
                  while($f = mysqli_fetch_assoc($fechamentoQuery)) {
                    array_push($fechamentoArray, $f);
                }

              echo  verificaAgendamento("2", $fechamentoArray);

?>


echo "ola";


SELECT agendamentos.carros_idCarro, clientes.nomeCompleto as cliente, agendamentos.hora, agendamentos.data, fechamentos.valor, fechamentos.status, usuarios.nomeCompleto as vendedor from usuarios inner join fechamentos on usuarios.idUsuario=fechamentos.fechador inner join agendamentos on fechamentos.agendamentos_idAgendamento = agendamentos.idAgendamento INNER join clientes on clientes.idCliente=agendamentos.clientes_idCliente WHERE clientes.idCliente ='1' or usuarios.idUsuario='' or agendamentos.data= '';

SELECT agendamentos.carros_idCarro, clientes.nomeCompleto as cliente, agendamentos.data, agendamentos.hora, usuarios.nomeCompleto as vendedor from usuarios inner join fechamentos on usuarios.idUsuario=fechamentos.fechador inner join agendamentos on fechamentos.agendamentos_idAgendamento = agendamentos.idAgendamento INNER join clientes on clientes.idCliente=agendamentos.clientes_idCliente