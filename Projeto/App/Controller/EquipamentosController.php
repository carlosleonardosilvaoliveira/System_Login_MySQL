<?php

require_once ('../Model/Equipamentos.php');
require_once ('../Model/EquipamentosDAO.php');
require_once ('../../Config/Database.php');

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['method'])){
    $method = $_POST['method'];
    if(method_exists('EquipamentosController', $method)){
        $equips = new EquipamentosController;
        $equips->$method($_POST);
    }else{
        echo "Metodo incorreto";
    }
}

$funcao = new EquipamentosController();

if(isset($_POST['action']) && !empty($_POST['action'])){
    if($_POST['action'] == "functionListar"){
        $funcao->listar();
    }
}

class EquipamentosController {

    function listar(){

        $conexao            = new Database();

        $equipamentosDao    = new EquipamentosDAO();
        $requisicao         = $equipamentosDao->mostrar($conexao);

        foreach($requisicao as $row){
            echo "
                <tr>
                    <td>".$row['numeroEq']."</td>
                    <td>".$row['pontoEq']."</td>
                    <td>".$row['ipEq']."</td>
                    <td>".$row['disponibilidadeEq']."</td>
                    <td>".$row['saldoAtual']."</td>
                    <td>".$row['saqueAnterior']."</td>
                    <td>".$row['totalSaques']."</td>
                    <td>".$row['descricao']."</td>
                </tr><br>
            ";
        }
    }
}

