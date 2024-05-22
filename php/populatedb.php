<?php
include '../dbconnection/db.php';
include $_SERVER['DOCUMENT_ROOT'].'/session.php';

try {
    // Establish database connection
    // Ensure $pdo is properly initialized with a PDO object connected to your database

    $stmt = $pdo->prepare('SELECT * FROM patient_request_datas');
    $stmt->execute();
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Check if data exists
    if ($data) {
        // Convert data to JSON and echo
        header('Content-Type: application/json');
        echo json_encode($data);
    } else {
        header('Content-Type: application/json');
        echo json_encode(["message" => "No records found"]);
    }

} catch (PDOException $e) {
    // Handle database errors
    echo json_encode(["error" => $e->getMessage()]);
    
}
?>
