<?php 
include_once '../../config/db.php';
include_once '../../utils/common.php';

if(!is_null($conexao)){
        $dados = $_POST;
        $prpInsert = $conexao->prepare("INSERT INTO motoristas(nome, telefone, ativo, data_admissao, tipo_contrato) VALUES(:nome, :telefone, :ativo, :data_admissao, :tipo_contrato)");
        $prpDate = explode('/', $_POST['data_admissao']);
        $dados['data_admissao'] = date('Y-m-d', strtotime($prpDate[2] . '-' . $prpDate[0] . '-' . $prpDate[1]));
        try{
            $prpInsert->execute($dados);
            echo true;
        }catch(\PDOException $e){
            echo false;
        }

}

?>