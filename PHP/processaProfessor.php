<?php

use function PHPSTORM_META\sql_injection_subst;

    include_once ("conn.php");

    $nome = filter_input(INPUT_POST, 'fullname');
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $cpf = filter_input(INPUT_POST, 'cpf');
    $dataNascimento = filter_input(INPUT_POST, 'birthdate');
    $senha = filter_input(INPUT_POST, 'password');
    $senha_hash = password_hash($senha, PASSWORD_DEFAULT);

    
    try{
 
        $sqlemail = "SELECT * FROM professor WHERE email = ?";
        $stmt = $conn->prepare($sqlemail);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result_email = $stmt->get_result();

        $sqlcpf = "SELECT * FROM professor WHERE cpf = ?";
        $stmt = $conn->prepare($sqlcpf);
        $stmt->bind_param("s", $cpf);
        $stmt->execute();
        $result_cpf = $stmt->get_result();

        if ($result_email->num_rows > 0) {
            throw new \Exception("Esse email já está sendo usado, digite outro.");
        }


        if  ($result_cpf->num_rows > 0)  {
            throw new \Exception("Esse Cpf já está cadastrado, informe outro");
        }

        if  (!is_numeric($cpf))  {
                throw new \Exception("O Cpf enviado não é numérico");
        }

        $result_professor = "insert into professor (name, cpf, date, email, password) values ('$nome', '$cpf', '$dataNascimento', '$email', '$senha_hash')";
        $resultado_professor = mysqli_query($conn, $result_professor);

        if(mysqli_insert_id($conn)) {
            header("Location: ../index.php");
        }   else    {
            header("Location: ../index.php");
        }
    

    }   catch (\Exception $e)  {
            print_r($e->getMessage());
            print_r($e->getMessage());
    }

    
?>