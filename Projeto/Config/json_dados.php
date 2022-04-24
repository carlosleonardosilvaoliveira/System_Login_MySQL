<?php

require_once('Database.php');

$conexao = new Database();

$res = $conexao->conecta()->query("SELECT * FROM terminais");
$json_array = array();

while($row = $res->fetch_assoc()){
    $json_array[] = $row;
}

echo (json_encode($json_array));
