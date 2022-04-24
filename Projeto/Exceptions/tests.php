<?php

include('../Config/Database.php');
include('../App/Model/Equipamentos.php');
include('../App/Model/EquipamentosDAO.php');

$conexao            = new Database();
$equipamentosDao    = new EquipamentosDAO();

$equipamentos       = new Equipamentos();

$equipamentos->setId('1');

$requisicao      = $equipamentosDao->listarTudo($conexao, $equipamentos);

if($equipamentos->getId() == '1'){
    while($row = mysqli_fetch_array($requisicao)){
        $rows[] = $row;
    }
    print_r($rows);
}else{
    echo "saco";
}
