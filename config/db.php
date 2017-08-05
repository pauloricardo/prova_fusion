<?php
$conexao = null;
try{
    $conexao = new \PDO("mysql:host=localhost;dbname=prova_fusion_dms","root","root");
}catch(\PDOException $e){
    $conexao = null;
    echo $e->getMessage();
}
?>