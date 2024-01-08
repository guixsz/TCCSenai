<?php
    include_once ("conn.php");

    $nome = filter_input(INPUT_POST, 'fullname');
    $ra = filter_input(INPUT_POST, 'ra');
    $dataNascimento = filter_input(INPUT_POST, 'birthdate');
    $email = filter_input(INPUT_POST, 'email');
    $senha = filter_input(INPUT_POST, 'password');

    $result_aluno = "insert into aluno (name, ra, date, email, password) values ('$nome', '$ra', '$dataNascimento', '$email', '$senha')";
    $resultado_aluno = mysqli_query($conn, $result_aluno);  

    if(mysqli_insert_id($conn)) {
        header("Location: ../index.php");
    }   else    {
        header("Location: ../index.php");
    }
?>