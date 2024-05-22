<?php 
include '../dbconnection/db.php';
include $_SERVER['DOCUMENT_ROOT'].'/session.php';


// Fetch the last pat_code
$sql = "SELECT pat_code FROM patient_request_datas ORDER BY pat_id DESC LIMIT 1";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$data = $stmt->fetch(PDO::FETCH_ASSOC); 

if($data['pat_code'] === "" || $data['pat_code'] === NULL){
    $pat_code = "PATCODE-0001";
 } else {
    $last_number = substr($data['pat_code'], 8); // Extracting the numeric part after the prefix "PATCODE-"

    $hpercodePrefix = "PATCODE-"; // Set the prefix
    $new_number = (int)$last_number + 1; // Increment the last number, ensure it's an integer

    // Determine the number of leading zeros
    $zeros = str_pad($new_number, 4, "0", STR_PAD_LEFT); 

    $pat_code = $hpercodePrefix . $zeros;
}

echo $pat_code;

$_SESSION['current_patcode'] = $pat_code;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve form data
    $medcert_type = $_POST['flexRadioDefault'];
    $department_clinic = $_POST['departments'];
    $purpose_medreq = $_POST['select_purpose'];
    $confinement_date = $_POST['select_consultation_date'];
    $pat_last_name = $_POST['last_name'];
    $pat_first_name = $_POST['first_name'];
    $pat_middle_name = $_POST['middle_name'];
    $pat_ext_name = $_POST['ext_name'];
    $pat_birthdate = $_POST['birthdate'];
    $pat_email_address = $_POST['email_address'];
    $pat_mobile_number = $_POST['mobile_number'];
    $pat_province = $_POST['province'];
    $pat_city = $_POST['cities'];
    $pat_barangay = $_POST['barangay'];
    $pat_valid_id = $_POST['patient_valid_id'];
    $status = "pending";

    $requester_relationship = $_POST['requester_relationship'];
    $requester_last_name = $_POST['requester_last_name'];
    $requester_first_name = $_POST['requester_first_name'];
    $requester_middle_name = $_POST['requester_middle_name'];
    $requester_ext_name = $_POST['requester_ext_name'];
    $requester_birthdate = $_POST['requester_birthdate'];
    $requester_email_address = $_POST['requester_email_address'];
    $requester_mobile_number = $_POST['requester_mobile_number'];
    $requester_province = $_POST['requester_province'];
    $requester_cities = $_POST['requester_cities'];
    $requester_barangay = $_POST['requester_barangay'];
    $requester_valid_id_cont = $_POST['requester_valid_id_cont'];
    $for_whom = $_POST['request_options'];
    $otp = $_SESSION['OTP'];

    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Prepare the SQL insert statement
    $stmt = $pdo->prepare('INSERT INTO patient_request_datas (pat_code, medcert_type, department_clinic, purpose_medreq, confinement_date, pat_last_name, pat_first_name, pat_middle_name, pat_ext_name, pat_birthdate, pat_email_address, pat_mobile_number, pat_province, pat_city, pat_barangay, pat_valid_id, status,
    for_whom, requester_relationship_with_pat, req_last_name, req_first_name, req_middle_name, req_ext_name, req_birthdate, req_email_address, req_mobile_number, req_province, req_city, req_barangay, req_valid_id, otp)
    VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)');
    
    // Bind parameters
    $stmt->bindParam(1, $pat_code, PDO::PARAM_STR);
    $stmt->bindParam(2, $medcert_type, PDO::PARAM_STR);
    $stmt->bindParam(3, $department_clinic, PDO::PARAM_STR);
    $stmt->bindParam(4, $purpose_medreq, PDO::PARAM_STR);
    $stmt->bindParam(5, $confinement_date, PDO::PARAM_STR);
    $stmt->bindParam(6, $pat_last_name, PDO::PARAM_STR);
    $stmt->bindParam(7, $pat_first_name, PDO::PARAM_STR);
    $stmt->bindParam(8, $pat_middle_name, PDO::PARAM_STR);
    $stmt->bindParam(9, $pat_ext_name, PDO::PARAM_STR);
    $stmt->bindParam(10, $pat_birthdate, PDO::PARAM_STR);
    $stmt->bindParam(11, $pat_email_address, PDO::PARAM_STR);
    $stmt->bindParam(12, $pat_mobile_number, PDO::PARAM_STR);
    $stmt->bindParam(13, $pat_province, PDO::PARAM_STR);
    $stmt->bindParam(14, $pat_city, PDO::PARAM_STR);
    $stmt->bindParam(15, $pat_barangay, PDO::PARAM_STR);
    $stmt->bindParam(16, $pat_valid_id, PDO::PARAM_STR);
    $stmt->bindParam(17, $status, PDO::PARAM_STR);
    $stmt->bindParam(18, $for_whom, PDO::PARAM_STR);
    $stmt->bindParam(19, $requester_relationship, PDO::PARAM_STR);
    $stmt->bindParam(20, $requester_last_name, PDO::PARAM_STR);
    $stmt->bindParam(21, $requester_first_name, PDO::PARAM_STR);
    $stmt->bindParam(22, $requester_middle_name, PDO::PARAM_STR);
    $stmt->bindParam(23, $requester_ext_name, PDO::PARAM_STR);
    $stmt->bindParam(24, $requester_birthdate, PDO::PARAM_STR);
    $stmt->bindParam(25, $requester_email_address, PDO::PARAM_STR);
    $stmt->bindParam(26, $requester_mobile_number, PDO::PARAM_STR);
    $stmt->bindParam(27, $requester_province, PDO::PARAM_STR);
    $stmt->bindParam(28, $requester_cities, PDO::PARAM_STR);
    $stmt->bindParam(29, $requester_barangay, PDO::PARAM_STR);
    $stmt->bindParam(30, $requester_valid_id_cont, PDO::PARAM_STR);
    $stmt->bindParam(31, $otp, PDO::PARAM_STR);

    // Execute the statement and check for errors
    if ($stmt->execute()) {
        // Success
        echo 'Data inserted successfully.';
    } else {
        // Handle errors
        $errorInfo = $stmt->errorInfo();
        echo "Error: " . $errorInfo[2]; // Display the error message
    }
}
?>
