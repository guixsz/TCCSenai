<?php
    include_once ("conn.php");

    $nome = filter_input(INPUT_POST, 'fullname');
    $ra = filter_input(INPUT_POST, 'ra');
    $dataNascimento = filter_input(INPUT_POST, 'birthdate');
    $email = filter_input(INPUT_POST, 'email');
    $senha = filter_input(INPUT_POST, 'password');
    $senha_hash = password_hash($senha, PASSWORD_DEFAULT);
    
    try {

        $sqlemail = "SELECT * FROM aluno WHERE email = ?";
        $stmt = $conn->prepare($sqlemail);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result_email = $stmt->get_result();

        $sqlra = "SELECT * FROM aluno WHERE ra = ?";
        $stmt = $conn->prepare($sqlra);
        $stmt->bind_param("s", $ra);
        $stmt->execute();
        $result_ra = $stmt->get_result();

        if ($result_email->num_rows > 0) {
            throw new \Exception("Esse email já está cadastrado, digite outro.");
    }

        if  ($result_ra->num_rows > 0)  {
            throw new \Exception("Esse RA já está cadastrado, informe outro");
    }

        if  (!is_numeric($ra))  {
            throw new \Exception("O RA enviado não é numérico");
    }

    $result_aluno = "insert into aluno (name, ra, date, email, password) values ('$nome', '$ra', '$dataNascimento', '$email', '$senha_hash')";
    $resultado_aluno = mysqli_query($conn, $result_aluno);


    if(mysqli_insert_id($conn)) {
        header("Location: ../index.php");
    }   else    {
        header("Location: ../index.php");
    }

   
    }   catch (\Exception $e)  {
        print_r($e->getMessage());
}
?>