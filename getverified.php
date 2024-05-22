<?php 

include '../dbconnection/db.php';
include $_SERVER['DOCUMENT_ROOT'].'/session.php';

try {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Get the concatenated OTP from the request
        $input_otp = $_POST['otp'];

        // Fetch the actual OTP and the pat_id of the last row from the database
        $sql = "SELECT pat_id, otp FROM patient_request_datas ORDER BY pat_id DESC LIMIT 1";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($data) {
            $actual_otp = $data['otp'];
            $pat_id = $data['pat_id'];

            // Compare the input OTP with the actual OTP
            if ($input_otp === $actual_otp) {
                // Update the specific column to be one for the last row
                $update_sql = "UPDATE patient_request_datas SET verified = 1 WHERE pat_id = :pat_id";
                $update_stmt = $pdo->prepare($update_sql);
                $update_stmt->bindParam(':pat_id', $pat_id);
                $update_stmt->execute();

                // Check if the update was successful
                if ($update_stmt->rowCount() > 0) {
                    echo 'valid and updated';
                } else {
                    echo 'valid but not updated';
                }
            } else {
                echo 'invalid';
            }
        } else {
            echo 'no_data';
        }
    } else {
        echo 'invalid_request';
    }
} catch (Exception $e) {
    echo 'Error: ' . $e->getMessage();
}
?>
