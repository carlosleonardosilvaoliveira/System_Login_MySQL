<?php

require_once ('../Config/Database.php');


$login      = $_POST['user'];
$password   = $_POST['password'];

$campos     = array($login, $password);

foreach($campos as $fields){
    $conexao    = new Database();

    if(!empty($fields)){
        $login       = mysqli_real_escape_string($conexao->conecta(), $_POST['user']);
        $password    = mysqli_real_escape_string($conexao->conecta(), $_POST['password']);

        $sql_query  = mysqli_query($conexao->conecta(), "SELECT * FROM usuarios WHERE user = '$login' AND password = '$password'") or die("Falha no código SQL: " . $conn->error);

        $row        = $sql_query->num_rows;

        if($row == 1){
            $login   = $sql_query->fetch_assoc();

            if(!isset($_SESSION)){
                session_start();
            }

            //Armazenando id e login na sessão logada
            $_SESSION['id']     = $login['id'];
            $_SESSION['nome']   = $login['nome'];

            header("Location:../View/painel.html");
            exit;
        }else{
            header("Location:../index.html");
            exit;
        }
    }else{
        echo "Campos vazios";
        header("Location:../index.html");
        exit;
    }
}