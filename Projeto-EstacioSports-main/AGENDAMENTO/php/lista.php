<?php
include("./conexao.php");

$consulta = "SELECT pessoa, nome, setor, data, horario FROM clientes";

$resultado = mysqli_query($connection, $consulta);

mysqli_close($connection);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Reservas</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-image: url(../img/fundo.jpeg);
        }

        .container {
            position: relative;
            width: 800px;
            height: 400px;
            overflow: auto;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        .center {
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px dashed black;
            border-right: 1px dashed black; 
            width: 20%;
            white-space: nowrap;
        }

        th:last-child,
        td:last-child {
            border-right: none; 
        }
       
        th span.fas {
        margin-right: 5px; 
        }
        th span.fas {
            vertical-align: middle;
        }

        .close-icon {
        position: absolute;
        top: 10px;
        left: 10px;
        font-size: 25px;
        cursor: pointer;
        text-decoration: none;
    }
    </style>
</head>
<body>
    <div class="container">
    <a href="../index.html" class="close-icon"><i class="fa-solid fa-xmark" style="color: rgb(0,0,0);"></i></a>
        <h1 class="center">Lista de Reservas</h1>
        <table>
            <tr>
                <th>
                    <span class="fas fa-user-circle"></span>
                    <span class="th-text">Pessoa</span>
                </th>
                <th>
                    <span class="fa-regular fa-address-book"></span>
                    <span class="th-text">Nome</span>
                </th>
                <th>
                    <span class="fas fa-building"></span>
                    <span class="th-text">Setor</span>
                </th>
                <th>
                    <span class="far fa-calendar-alt"></span>
                    <span class="th-text">Data</span>
                </th>
                <th>
                    <span class="far fa-clock"></span>
                    <span class="th-text">Horário</span>
                </th>
            </tr>
            <?php while($dado = mysqli_fetch_array($resultado)) { ?>
            <tr>
                <td><?php echo $dado["pessoa"]; ?></td>
                <td><?php echo $dado["nome"]; ?></td>
                <td><?php echo $dado["setor"]; ?></td>
                <td><?php echo date("d/m/Y", strtotime($dado["data"])); ?></td>
                <td><?php echo date("H:i", strtotime($dado["horario"])); ?></td>
            </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>


