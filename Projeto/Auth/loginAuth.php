<?php

require_once ('../Config/Database.php');


$user       = $_POST['user'];
$password   = $_POST['password'];

$campos     = array($user, $password);

foreach($campos as $fields){
    $conexao    = new Database();

    if(!empty($fields)){
        $user       = mysqli_real_escape_string($conexao->conecta(), $_POST['user']);
        $password   = mysqli_real_escape_string($conexao->conecta(), $_POST['password']);

        $sql_query  = mysqli_query($conexao->conecta(), "SELECT * FROM usuarios WHERE user = '$user' AND password = '$password'") or die("Falha no código SQL: " . $conn->error);

        $row        = $sql_query->num_rows;

        if($row == 1){
            $user   = $sql_query->fetch_assoc();

            if(!isset($_SESSION)){
                session_start();
            }

            //Armazenando id e login na sessão logada
            $_SESSION['id']     = $user['id'];
            $_SESSION['user']  = $user['user'];

            header("Location:../View/painel.html");
            exit;
        }else{
            header("Location:../index.html");
        }
    }
}