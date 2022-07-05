<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/telaAgendamento.css">
  <title>Fechamento de Clientes</title>
</head>

    <div class="container">
        <div class="py-5 text-left text-white">
            <img class="d-block mx-auto mb-3" src="../imgLogin/Logo BMW.png" alt="" width="90" height="90">
            <h2>Fechamento de Clientes</h2>
        </div>

            <div class="form-row">
                <div class="form-group col-md-4" style="width: 50%;">
                    <label for="inputState">Selecione o veículo desejado:</label>   
                    <select class="form-control">
                        <option>Selecione</option>
                        <option value="1">Carro - cliente - data</option>
                        <option value="2">Carro - cliente - data</option>
                    </select>
                </div>

                <div class="form-group col-md-4" style="width: 50%;">
                    <label for="inputState">Status do agendamento:</label>
                    <select class="form-control">
                        <option>Selecione</option>
                        <option value="1">Aprovado</option>
                        <option value="2">Não aprovado</option>
                    </select>
                </div>

                <div class="col-md-4 mb-3" style="width: 50%;">
                    <label for="valor">Valor</label>
                    <input type="text" class="form-control" placeholder="R$ 000,00" value="">
                </div>

                <button class="btn btn-primary btn-lg btn-block" type="submit">Cadastrar</button>
            </div>
    </div>
