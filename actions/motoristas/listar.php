<?php
include_once '../../config/db.php';
include_once '../../utils/common.php';
if(!is_null($conexao)){
    $page = isset($_POST['page']) ? intval($_POST['page']) : 0;
    $rows = isset($_POST['rows']) ? intval($_POST['rows']) : 10;
    $offset = ($page - 1) * $rows;
    
    $result = [];
     $count = $conexao->query("SELECT COUNT(*) as count FROM motoristas");
     $stmtCount = $count->fetch(PDO::FETCH_ASSOC);
     $result['total'] = $stmtCount['count'];

    $select = $conexao->query("SELECT * FROM motoristas ORDER BY matricula LIMIT {$offset}, {$rows}");
    $stmt = $select->fetchAll(PDO::FETCH_ASSOC);
    for($i = 0, $count = count($stmt) ; $i < $count ; $i++){
        $stmt[$i]['data_admissao'] = date('d/m/Y', strtotime($stmt[$i]['data_admissao']));
        $stmt[$i]['telefone'] = formatTelefone($stmt[$i]['telefone']);
        $stmt[$i]['ativo'] = $stmt[$i]['ativo'] == 1 ? 'Sim' : 'Nao';
        $stmt[$i]['tipo_contrato'] = $stmt[$i]['tipo_contrato'] == 'E' ? 'Empregado' : 'Terceirizado';
    }
    $result['rows'] = $stmt;
    echo json_encode($result);
}




?>