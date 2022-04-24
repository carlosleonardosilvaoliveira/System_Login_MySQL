<?php

class EquipamentosDAO {

    /*function adiciona(Database $conexao, Equipamentos $equipamentos){
        $query = "INSERT INTO terminais (descricao) VALUES ('{$equipamentos->getDescricao()}')";
        mysqli_query($conexao->conecta(), $query);
    }*/

    public function mostrar(Database $conexao){

        $res = $conexao->conecta()->query("SELECT * FROM terminais");
        $json_array = array();

        while($row = $res->fetch_assoc()){
            $json_array[] = $row;
        }

        return $json_array;

        //$json = json_encode($json_array);
        //echo (json_encode($json_array)); 
    }
}