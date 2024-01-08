<?php
    include_once ("conn.php");

    $nome = filter_input(INPUT_POST, 'fullname');
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $cpf = filter_input(INPUT_POST, 'cpf');
    $dataNascimento = filter_input(INPUT_POST, 'birthdate');
    $senha = filter_input(INPUT_POST, 'password');

    $result_professor = "insert into professor (name, cpf, date, email, password) values ('$nome', '$cpf', '$dataNascimento', '$email', '$senha')";
    $resultado_professor = mysqli_query($conn, $result_professor);

    if(mysqli_insert_id($conn)) {
        header("Location: ../index.php");
    }   else    {
        header("Location: ../index.php");
    }
?>