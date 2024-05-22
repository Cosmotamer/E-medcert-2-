<?php
include '../dbconnection/db.php';
include $_SERVER['DOCUMENT_ROOT'].'/session.php';


$sql = "DELETE patient_request_datas WHERE pat_id = :pat_id";
$stmt = $pdo->prepare($update_sql);
$stmt->bindParam(':pat_id', $pat_id);
$stmt->execute();


?>