<?php
// // Include the database connection file
// require_once('src/db/dbconnection.php');

// // Check if form is submitted
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     // Validate and sanitize form inputs
//     $medcert_option = isset($_POST['medcert_options']) ? $_POST['medcert_options'] : '';
//     $departments = isset($_POST['departments']) ? $_POST['departments'] : '';
//     $select_consult_date = isset($_POST['select_consult_date']) ? $_POST['select_consult_date'] : '';
//     $last_name = isset($_POST['last_name']) ? $_POST['last_name'] : '';
//     $first_name = isset($_POST['first_name']) ? $_POST['first_name'] : '';
//     $middle_name = isset($_POST['middle_name']) ? $_POST['middle_name'] : '';
//     $ext_name = isset($_POST['ext_name']) ? $_POST['ext_name'] : '';
//     $province = isset($_POST['province']) ? $_POST['province'] : '';
//     $valid_id = isset($_POST['valid_id']) ? $_POST['valid_id'] : '';


//     // File upload handling
//     if ($_FILES['valid_id']['error'] === UPLOAD_ERR_OK) {
//         // File was uploaded successfully
//         $targetDirectory = "src/"; // Specify the directory where you want to store uploaded files
//         $targetFile = $targetDirectory . basename($_FILES["valid_id"]["name"]);
    
//         // Insert data into the database using prepared statement
//         $sql = "INSERT INTO consultant_information (consultant_last_name, consultant_first_name, extension_name, certificate_type, department, consultation_date, province, valid_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
//         $stmt = $conn->prepare($sql);
//         $stmt->bind_param("ssssssss", $last_name, $first_name, $ext_name, $medcert_option, $departments, $select_consult_date, $province, $targetFile);
    
//         if ($stmt->execute()) {
//             // Move uploaded file to target directory
//             if (move_uploaded_file($_FILES["valid_id"]["tmp_name"], $targetFile)) {
//                 echo "The file ". htmlspecialchars(basename($_FILES["valid_id"]["name"])). " has been uploaded and data inserted into the database successfully.";
//             } else {
//                 echo "Sorry, there was an error moving the uploaded file.";
//             }
//         } else {
//             echo "Error: " . $sql . "<br>" . $conn->error;
//         }
//     } else {
//         // Error occurred during file upload
//         echo "File upload error: " . $_FILES['valid_id']['error'];
//     }
// }
// // Close the database connection
// $conn->close();

// Include the database connection file
require_once('src/db/dbconnection.php');

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Extract form data
    $medcert_option = $_POST['medcert_options'];
    $departments = $_POST['departments'];
    $select_consult_date = $_POST['select_consult_date'];
    $last_name = $_POST['last_name'];
    $first_name = $_POST['first_name'];
    $middle_name = $_POST['middle_name'];
    $ext_name = $_POST['ext_name'];
    $province = $_POST['province'];
    $city = $_POST['city'];
    $barangay = $_POST['barangay'];

    // Insert data into the database
    $sql = "INSERT INTO consultant_information(consultant_last_name, consultant_first_name, extension_name, certificate_type, department, consultation_date, province, city, barangay) VALUES ('$last_name', '$first_name', '$ext_name', '$medcert_option', '$departments', '$select_consult_date', '$province', '$city', '$barangay')";
    if ($conn->query($sql) === TRUE) {
        echo "Data inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "Form not submitted";
}

// Close the database connection
$conn->close();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.4/css/bulma.min.css" integrity="sha512-HqxHUkJM0SYcbvxUw5P60SzdOTy/QVwA1JJrvaXJv4q7lmbDZCmZaqz01UPOaQveoxfYRv1tHozWGPMcuTBuvQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />    <link rel="stylesheet" href="src/style/style.css">
    <link rel="stylesheet" href="src/style/e_certificate_landing_page.css">

</head>
<body>

    <div id="mama_div">

        <nav>

            <div id="label_logo">

                <img id="bghmc_logo" src="src/imgs/BGHMC_Logo.png">
                <label id="ecert_label">e-MEDCERT PORTAL</label>

            </div>
        </nav>

        <div id="landing_page_body_content">

            <div id="get_med_cert_label_cont">

                <label id="get_med_cert_label">Get your medical certificate online in 3-easy Steps</label>

            </div>

            <div id="request_button_container">

                <button id="request_button">Make a Request</button>

            </div>

            <div id="steps_container">

                <div class="step_style" id="step_1">

                    <h3>Step 1</h3>
            
                    <label>Fill in the online request form</label>

                </div>

                <i class="fa-solid fa-right-long fa-fade"></i>

                <div class="step_style" id="step_2">

                    <h3>Step 2</h3>
                
                    <label>Submit and get verify via OTP</label>

                </div>

                <i class="fa-solid fa-right-long fa-fade"></i>

                <div class="step_style" id="step_3">

                    <h3>Step 3</h3>
                    
                    <label>Issuance of Medical Certificate</label>

                </div>

            </div>

        </div>

        <footer>

            <div id ="footer_content_left">

                <label>Bataan General Hospital and Medical Center</label>
                <label>Manahan St., Tenejero, Balanga City</label>
                <label>2100 Bataan, Philippines</label>

            </div>

            <div id ="footer_content_right">

                <label>Call Us:</label>
                <label>(047) 237-9771 / 9772</label>
                <label>Local: 4103 (IPD Records)</label>

            </div>

        </footer>
        
        <div id="empty_modal">

            <div id="modal_accept">

                <div class="modal_header" id="modal_nav">

                    <label id="nav_label">DECLARATION and DATA PRIVACY NOTICE</label>
                    <i class="fa-solid fa-xmark" style="color: white; cursor:pointer;"></i>

                </div>

                <div id="modal_content_1">

                    <p  style="font-family: sans-serif; ">
                        By continuing, I hereby certify that the information
                        I will declare in the Online Medical Certificate Request Form is true and complete.
                        I understand that my failure to answer or any false or misleading information given
                        by me may be used as a ground for the filing of civil case, criminal case, and administrative
                         (if applicable) case against me.</p>

                </div>

                <div id="modal_content_2">

                    <p style="font-family: sans-serif; ">
                    I also voluntarily and freely consent to the collection and sharing of my personal
                    sensitive information to Bataan General Hospital and Medical Center in compliance with
                    the Data Privacy Act.

                    </p>

                </div>

                <div id="modal_button_container">

                    <button id="modal_accept_but" class="modal_button">Accept</button>
                    <button id="modal_decline_but" class="modal_button">Decline</button>

                </div>
            
                <div id="modal_footer">

                    <label>NO PAYMENT SHALL BE COLLECTED TO SECURE MEDICAL CERTIFICATE</label>

                </div>

            </div>

            <div id="form_modal">

                <div class="modal_header">

                    <label id="request_form_label">Request_form</label>

                    <i class="fa-solid fa-xmark" style="color: white; cursor:pointer;"></i>
                    

                </div>

                <form id="form_body" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">

                    <div id="request_form">

                        <div id="request_form_instruction">

                            <label>Please answer the following questions accurately:</label>

                        </div>

                        <div id="patient_registration_label_container">

                            <label style="margin-left: 1%;">PATIENT INFORMATION</label>

                        </div>

                        <div id="request_form_first_cont">

                            <div id="select_med_cert_container">
                                <label><span style="color:red;">*</span> Select which medical certificate you require:</label>
                            </div>

                            <div id="cont_1_choices_container">

                            <div class="cont_1_choices">

                                <input name="medcert_options" id="confine" type="radio" value="Confinement" style="margin-bottom: 0.8%; margin-right:1%;" required>
                                <label>Confinement</label>

                            </div>

                            <div class="cont_1_choices">

                                <input name="medcert_options" id="telemed" type="radio" value="Telemedicine" style="margin-bottom: 0.8%; margin-right:1%;" required>
                                <label>Telemedicine</label>

                            </div>

                            <div class="cont_1_choices">

                                <input name="medcert_options" id="opd_walk_in" type="radio" value="OPD Walk-in (Face-to-Face)" style="margin-bottom: 0.8%; margin-right:1%;" required>
                                <label>OPD Walk-in (Face-to-Face)</label>

                            </div>  

                            </div>

                        </div>

                        <div id="request_form_second_cont">

                            <div id="select_department_label_container">

                                <label><span style="color: red;">*</span> Select Department</label>

                            </div>

                            <div id="select_department_container">

                                <select name="departments" id="departments">

                                    <option disabled selected>Select Department</option>
                                    <option>Ancillary</option>
                                    <option>Family Medicine</option>
                                    <option>Internal Medicine</option>
                                    <option>OB-Gyne</option>
                                    <option>Pediatrics</option>
                                    <option>Surgery</option>

                                </select>

                            </div>

                        </div>

                        <div id="request_form_third_cont">

                            <div id="select_consult_label_cont">

                                <label><span style="color: red;">*</span> Select consultation/confinement date:</label>

                            </div>

                            <div id="select_consult_date_container">

                                <input name="select_consult_date" id="select_consult_date" type="date" required>

                            </div>

                        </div>

                        <div class="full_name">

                            <div class ="label_cont">

                                <label><span style="color: red;">*</span> Last Name</label>

                            </div>

                            <div class="textbox_cont">

                                <input id="last_name" name="last_name" class="full_name_textboxes" type="text"  placeholder="Last Name" required>

                            </div>

                        </div>

                        <div class="full_name">

                            <div class ="label_cont">

                                <label><span style="color: red;">*</span> First Name</label>

                            </div>

                            <div class="textbox_cont">

                                <input name="first_name" id="first_name" class="full_name_textboxes" type="text" placeholder="First Name" required>

                            </div>

                        </div>

                        <div class="full_name">

                            <div class ="label_cont">

                                <label><span style="color: red;">*</span> Middle Name</label>

                            </div>

                            <div class="textbox_cont">

                                <input name="middle_name" id="middle_name" class="full_name_textboxes" type="text" placeholder="Middle Name" required>

                            </div>

                        </div>

                        <div class="full_name">

                            <div class ="label_cont">

                                <label><span style="color: red;">*</span> Extension Name</label>

                            </div>

                            <div class="textbox_cont">

                                <input name="ext_name" id="ext_name" class="full_name_textboxes" type="text" placeholder="example: jr.">

                            </div>

                        </div>

                        <div class="full_name">

                            <div class ="label_cont">

                                <label><span style="color: red;">*</span> Province</label>

                            </div>

                            <div class="textbox_cont">

                                <select id="province" name="province" class = "full_name_textboxes" required>
                                    
                                <option disabled selected>Select Province</option> 
                                <option>Bataan</option>     
                                <option>Pampanga</option> 
                                <option>Tarlac</option>    

                                </select>

                            </div>

                        </div>

                        <div class="full_name">

                            <div class ="label_cont">

                                <label><span style="color: red;">*</span> City</label>

                            </div>

                            <div class="textbox_cont">

                                <select id="city" name="city" class = "full_name_textboxes" required>
                                    
                                <option disabled selected>Select City</option> 
                                <option>Abucay</option>     
                                <option>Orani</option> 
                                <option>Samal</option>    

                                </select>

                            </div>

                        </div>

                        <div class="full_name">

                            <div class ="label_cont">

                                <label><span style="color: red;">*</span> Barangay</label>

                            </div>

                            <div class="textbox_cont">

                                <select id="barangay" name="barangay" class = "full_name_textboxes" required>
                                    
                                <option disabled selected>Barangay</option> 
                                <option>Bataan</option>     
                                <option>Pampanga</option> 
                                <option>Tarlac</option>    

                                </select>

                            </div>

                        </div>

                        <div class="full_name">

                                <div class="label_cont">

                                    <label><span style="color: red;">*</span> Valid ID</label>

                                </div>

                                <div class="text_cont">

                                    <input name="valid_id" id="valid_id" type="file" required>

                                </div>

                        </div>     
                            
                    <div id="submit_cont">

                        <button type="submit" id="submit_but">Submit</button>

                    </div>

                    </div>
                </form>

                </div>
            </div>
        </div>

    <script src="src/js/e_certificate_landing_page.js"></script>
</div>
    
</body>
</html>