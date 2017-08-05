<?php
include_once '../../config/db.php';
include_once '../../utils/common.php';

if(!is_null($conexao)){
    $id = $_POST['id'];
    $prpDelete = $conexao->prepare('DELETE FROM motoristas WHERE matricula = :id');
    $result = [];
    try{
        $prpDelete->execute(['id' => $id]);
        echo true;
    }catch(\PDOException $e){
        echo false;
    }


}



?>