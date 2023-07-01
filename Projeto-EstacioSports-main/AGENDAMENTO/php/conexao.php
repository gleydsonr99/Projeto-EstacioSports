<?php
    $connection = mysqli_connect('localhost', 'root', '', 'agendamento');

    if(isset($_POST['enviar'])) {
        $nome = mysqli_real_escape_string($connection, $_POST['nome']);
        $email = mysqli_real_escape_string($connection, $_POST['email']);
        $telefone = mysqli_real_escape_string($connection, $_POST['telefone']);
        $data = mysqli_real_escape_string($connection, $_POST['data']);
        $horario = mysqli_real_escape_string($connection, $_POST['horario']);
        $pessoa = mysqli_real_escape_string($connection, $_POST['pessoa']);
        $matricula = mysqli_real_escape_string($connection, $_POST['matricula']);
        $setor = mysqli_real_escape_string($connection, $_POST['setor']);
        $campus = mysqli_real_escape_string($connection, $_POST['campus']);

        $request = "INSERT INTO clientes (nome, email, telefone, data, horario, pessoa, matricula, setor, campus) VALUES ('$nome', '$email', '$telefone', '$data', '$horario', '$pessoa', '$matricula', '$setor', '$campus')";

        mysqli_query($connection, $request);

        header('location:confirmar.php');
    } else {
        echo 'erro';
    }
?>
