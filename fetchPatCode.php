<?php 
    include '../dbconnection/db.php';
    include $_SERVER['DOCUMENT_ROOT'].'/session.php';

    $sql = "SELECT pat_code FROM patient_request_datas ORDER BY pat_id DESC LIMIT 1";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $data = $stmt->fetch(PDO::FETCH_ASSOC); 

    if($data['pat_code'] === "" || $data['pat_code'] === NULL){
        
    }

    echo json_encode($data);
?>