<?php 
include_once '../../config/db.php';
include_once '../../utils/common.php';

if(!is_null($conexao)){
        $dados = $_POST;
        $id = $_GET['id'];
        $prpInsert = $conexao->prepare("UPDATE motoristas SET nome = :nome, telefone = :telefone, ativo = :ativo, data_admissao = :data_admissao, tipo_contrato = :tipo_contrato WHERE matricula = :id");
        $prpDate = explode('/', $_POST['data_admissao']);
        $dados['data_admissao'] = date('Y-m-d', strtotime($prpDate[2] . '-' . $prpDate[1] . '-' . $prpDate[0]));
        try{
            $prpInsert->execute([
                'nome' => $dados['nome'],
                'telefone' => $dados['telefone'],
                'ativo' => $dados['ativo'],
                'data_admissao' => $dados['data_admissao'],
                'tipo_contrato' => $dados['tipo_contrato'],
                'id' => $id
            ]); 
            echo true;
        }catch(\PDOException $e){
            echo false;
        }

}

?>