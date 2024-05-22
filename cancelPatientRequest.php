<?php
include '../dbconnection/db.php';
include $_SERVER['DOCUMENT_ROOT'].'/session.php';


$sql = "DELETE FROM patient_request_datas WHERE pat_code = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$_SESSION['current_patcode']]);
?>