

<?php
    include $_SERVER['DOCUMENT_ROOT'].'/session.php';
    include './dbconnection/db.php';

    $_SESSION['current_patcode'] = "";
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="src/style/e_certificate.css">
    <link rel="stylesheet" href="src/style/e_certificate_mediaq.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

</head>
<body style="font-family: 'Roboto', sans-serif;">
<div id="main_container">
    <nav>
        <div id="label_logo">

            <div id="bghmc_logo_container">
             <img id="bghmc_logo" src="src/imgs/BGHMC_Logo.png">
            </div>

            <div id="emedcert_label">
                e-MEDCERT PORTAL
            </div>
            
        </div>
    </nav>
    <div id="landing_page_body_content">
        <div id="get_med_cert_label_cont">
            <label id="get_med_cert_label" style="font-family: 'Roboto';">Get your medical certificate online in 3-easy Steps</label>
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
            <i class="fa-solid fa-down-long fa-fade"></i>
            <div class="step_style" id="step_2">
                <h3>Step 2</h3>
                <label>Submit and get verify via OTP</label>
            </div>
            <i class="fa-solid fa-right-long fa-fade"></i>
            <i class="fa-solid fa-down-long fa-fade"></i>
            <div class="step_style" id="step_3">
                <h3>Step 3</h3>
                <label >Issuance of Medical Certificate</label>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="false" style="overflow:hidden;">
        <div class="modal-dialog modal-lg" style="overflow:hidden;">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #049CF5;">
                    <label id="nav_agreement_label">DECLARATION and DATA PRIVACY NOTICE</label>
                    <button id="modal_close_but" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" style="justify-content: center; align-items: center; display:flex; flex-direction:column; overflow:hidden;">
                    <div id="modal_accept">
                        <div id="modal_content_1">
                            <p>
                                By continuing, I hereby certify that the information
                                I will declare in the Online Medical Certificate Request Form is true and complete.
                                I understand that my failure to answer or any false or misleading information given
                                by me may be used as a ground for the filing of civil case, criminal case, and administrative
                                (if applicable) case against me.
                            </p>
                        </div>
                        <div id="modal_content_2">
                            <p>
                                I also voluntarily and freely consent to the collection and sharing of my personal
                                sensitive information to Bataan General Hospital and Medical Center in compliance with
                                the Data Privacy Act.
                            </p>
                        </div>
                        <div id="modal_button_container">
                            <button id="modal_accept_but" class="modal_button">Accept</button>
                            <button id="modal_decline_but" class="modal_button" data-bs-dismiss="modal" aria-label="Close">Decline</button>
                        </div>
                        <div id="modal_footer">
                        <label id="footer_label">NO PAYMENT SHALL BE COLLECTED TO SECURE MEDICAL CERTIFICATE</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="exampleModal3" data-bs-backdrop="static" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="false" style=" overflow:hidden;">
        <div class="modal-dialog modal-lg" style=" overflow:hidden;">
            <div class="modal-content">
                <div id ="request_form_header_modal" class="modal-header" style="  background-color: #049CF5; display: flex; flex-direction: column;" >
                <div id="title_and_button_header">
                    <label id="nav_patient_form_label">PATIENT and REQUESTER FORM</label>
                    <button id="patient_form_close_button" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                    <div id="progressbar_container">
                    <div class="container d-flex justify-content-center align-items-start">
                        <div class="progresses">
                        <div class="steps active" id="progress1">1</div> <!-- Active Step -->
                        <span class="line" id="line1"></span>
                        <div class="steps" id="progress2">2</div>
                        <span class="line" id="line2"></span>
                        <div class="steps" id="progress3">3</div>
                        </div>    
                    </div>

                        <div id="progress_label_container">

                            <div id="progress_pat_info_label" class="progress_labels">

                                Patient Information

                            </div>

                            <div id="progress_requester_info_label" class="progress_labels">

                                Requester Information

                            </div>

                            <div id="progress_otp_code_label"  class="progress_labels">

                                OTP Code

                            </div>


                            </div>

                            </div>
                </div>
                <div id="form_modal_2" class="modal-body" style="justify-content: center; align-items: center; display:flex; flex-direction:column; overflow:auto; ">
                    <div id="request_form_requester_form">
                        <div id="request_form">
                        <form id="patient_form" method="POST">
                                <div class="patient_registration_label_container">
                                    <label style="margin-left: 1%;">PATIENT INFORMATION</label>
                                </div>

                                <div class="container-xxl form-control" style="border:1px solid; margin-top:10px;">
                                    <label for="validationServer01" class="form-label" style="margin-bottom: 0%;"><span style="color: red;">*</span> Select which medical certificate you require:</label>
                                    

                                    <div class="container-sm">
                                        <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="confine" value="Confinement" required>
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Confinement
                                        </label>
                                        </div>
                                        <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="telemed" value="Telemedicine" required>
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            Telemedicine
                                        </label>
                                        </div>

                                        <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="opd_walk_in" value="OPD Walk-in (Face-to-Face)"required>
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            OPD Walk-in(Face to Face)
                                        </label>
                                        <div class="invalid-feedback">
                                            Please choose a certificate.
                                        </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="container-xxl form-control" style="border:1px solid ">
                                    <label for="validationServer01" class="form-label" style="margin-bottom: 0%;"><span style="color: red;">*</span> Select Department:</label>
                                
                                    <div class="container-sm">
                                        <select class="form-select" id="departments" name="select_departments" aria-label="Default select example" required>
                                            <option  disabled selected>Select Department / Clinic</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            Please choose a Department.
                                        </div>
                                    </div>

                                </div>

                                <div class="container-xxl form-control" style="border:1px solid ">
                                    <label for="validationServer01" class="form-label" style="margin-bottom: 0%;"><span style="color: red;">*</span> Purpose of the medical certificate request </label>
                                
                                    <div class="container-sm">
                                        <select class="form-select" id="request_purpose" name="select_purpose" aria-label="Default select example" required>
                                            <option disabled selected>Select Purpose</option>
                                        </select>

                                    <div class="invalid-feedback">
                                        Please select a purpose.
                                    </div>

                                    </div>
                                </div>

                                <div class="container-xxl form-control" style="border:1px solid ">
                                    <label for="validationServer01" class="form-label" style="margin-bottom: 0%;"><span style="color: red;">*</span> Select consultation/confinement date:</label>
                                
                                    <div class="container-sm">
                                        <input type="date" class="form-control" id="select_consult_date" name="select_consultation_date" required>

                                        <div class="invalid-feedback">
                                            Please select a valid consultation date.
                                        </div>
                                    </div>

                                </div>

                                <div class="container-xxl form-control" style="border:1px solid ">
                                    <label for="validationServer01" class="form-label" style="margin-bottom: 0%;"><span style="color: red;">*</span> Last Name</label>
                                
                                    <div class="container-sm">
                                        <input type="text" class="form-control" name="last_name" id="last_name" required>

                                        <div class="invalid-feedback">
                                            Please put a valid last name.
                                        </div>
                                    </div>
                                </div>

                                <div class="container-xxl form-control" style="border:1px solid ">
                                    <label for="validationServer01" class="form-label" style="margin-bottom: 0%;"><span style="color: red;">*</span> First Name</label>
                                
                                    <div class="container-sm">
                                        <input type="text" class="form-control" name="first_name" id="first_name" required>

                                        <div class="invalid-feedback">
                                        Please put a valid first name.
                                        </div>
                                    </div>

                                </div>

                                <div class="container-xxl form-control" style="border:1px solid ">
                                    <label for="validationServer01" class="form-label" style="margin-bottom: 0%;"><span style="color: red;">*</span> Middle Name</label>
                                
                                    <div class="container-sm">
                                        <input type="text" class="form-control" name="midddle_name" id="middle_name" required>
                                        <div class="invalid-feedback">
                                            Please put a valid middle name.
                                        </div>

                                    </div>
                                </div>

                                <div class="container-xxl form-control" style="border:1px solid ">
                                    <label for="validationServer01" class="form-label" style="margin-bottom: 0%;"><span style="color: white;">*</span> Ext Name</label>
                                
                                    <div class="container-sm">
                                        <input type="text" class="form-control" name = "ext_name" id="ext_name">

                                    </div>

                                </div>

                                <div class="container-xxl form-control" style="border:1px solid ">
                                    <label for="validationServer01" class="form-label" style="margin-bottom: 0%;"><span style="color: red;">*</span> Birthdate</label>
                                
                                    <div class="container-sm">
                                        <input type="date" class="form-control" id="birthdate" name="birthdate" required>
                                        <div class="invalid-feedback">
                                            Please put a valid birthdate.
                                        </div>
                                    </div>

                                </div>

                                <div class="container-xxl form-control" style="border:1px solid ">
                                    <label for="validationServer01" class="form-label" style="margin-bottom: 0%;"><span style="color: red;">*</span> Email Address</label>
                                
                                    <div class="container-sm">
                                        <input type="text" class="form-control" id="email_address" name="email_address" required>
                                        <div class="invalid-feedback">
                                            Please put a valid email address.
                                        </div>
                                    </div>
                                </div>

                                <div class="container-xxl form-control" style="border:1px solid ">
                                    <label for="validationServer01" class="form-label" style="margin-bottom: 0%;"><span style="color: red;">*</span> Mobile Number</label>
                                
                                    <div class="container-sm">
                                        <input type="text" class="form-control" id="mobile_number" name="mobile_number" required>
                                        <div class="invalid-feedback">
                                            Please put a valid mobile number.
                                        </div>
                                    </div>
                                </div>

                                
                                <div class="container-xxl form-control" style="border:1px solid ">
                                    <label for="validationServer01" class="form-label" style="margin-bottom: 0%;"><span style="color: red;">*</span> Province</label>
                                
                                    <div class="container-sm">
                                        <select class="form-select" name="province" id="province" aria-label="Default select example" required>
                                                <option disabled selected>Select Province</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            Please put a valid province.
                                        </div>
                                    </div>
                                </div>

                                
                                <div class="container-xxl form-control" style="border:1px solid ">
                                    <label for="validationServer01" class="form-label" style="margin-bottom: 0%;"><span style="color: red;">*</span> City</label>
                                
                                    <div class="container-sm">
                                        <select class="form-select" name="cities" id="cities" aria-label="Default select example" required>
                                            <option disabled selected>Select City</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            Please put a valid city.
                                        </div>
                                    </div>
                                </div>

                                
                                <div class="container-xxl form-control" style="border:1px solid ">
                                    <label for="validationServer01" class="form-label" style="margin-bottom: 0%;"><span style="color: red;">*</span> Barangay</label>
                                
                                    <div class="container-sm">
                                    <select class="form-select" name="barangay" id="barangay" aria-label="Default select example" required>
                                            <option disabled selected>Select Barangay</option>
                                        </select>

                                    <div class="invalid-feedback">
                                        Please put a valid barangay.
                                    </div>
                                    </div>



                                </div>

                                <div class="container-xxl form-control" style="border:1px solid ">
                                    <label for="validationServer01" class="form-label" style="margin-bottom: 0%;"><span style="color: red;">*</span> Patient's Valid ID</label>
                                
                                    <div class="container-sm">
                                        <input type="file" class="form-control" name="patient_valid_id" id="patient_valid_id" required>

                                    <div class="invalid-feedback">
                                        Please put a valid ID. Max file size: 5MB. Accepted formats: JPEG, PNG.
                                    </div>

                                    </div>

                                </div>
                            
                            </form>

                    </div>
                       

                        <div id="requester_form">
                            <form id="prequester_form">
                                <div class="patient_registration_label_container">
                                    <label style="margin-left: 1%;">REQUESTER INFORMATION</label>
                                </div>

                                <div class="container-xxl form-control" style="border:1px solid ">
                                    <label for="validationServer01" class="form-label" style="margin-bottom: 0%;"><span style="color: red;">*</span> Whose request form is this for?</label>
                                
                                    <div class="container-sm">

                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="request_options" id="myself" value="myself" required>
                                            <label class="form-check-label" for="request_options">
                                                For Myself
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="request_options" id="for_others" value="for_others" required>
                                            <label class="form-check-label" for="request_options">
                                                For Others:
                                            </label>
                                        </div>
                                    </div>
                                    <label for="relationship_with_patient">Relationship with the patient</label>
                                    <select class="form-select" id="requester_relationship" aria-label="Default select example" required>
                                            <option disabled selected>Select Relationship</option>
                             
                                    </select>

                                    <div class="invalid-feedback">
                                        Please select an answer.
                                    </div>


                                </div>

                                <div class="container-xxl form-control" style="border:1px solid ">
                                    <label for="validationServer01" class="form-label" style="margin-bottom: 0%;"><span style="color: red;">*</span> Last Name</label>
                                
                                    <div class="container-sm">
                                        <input type="text" class="form-control" id="requester_last_name" required>

                                    <div class="invalid-feedback">
                                        Please put a valid last name.
                                    </div>


                                    </div>



                                </div>

                                <div class="container-xxl form-control" style="border:1px solid ">
                                    <label for="validationServer01" class="form-label" style="margin-bottom: 0%;"><span style="color: red;">*</span> First Name</label>
                                
                                    <div class="container-sm">
                                        <input type="text" class="form-control" id="requester_first_name" required>

                                    <div class="invalid-feedback">
                                        Please put a valid first name.
                                    </div>

                                    </div>

                                



                                </div>

                                <div class="container-xxl form-control" style="border:1px solid ">
                                    <label for="validationServer01" class="form-label" style="margin-bottom: 0%;"><span style="color: red;">*</span> Middle Name</label>
                                
                                    <div class="container-sm">
                                        <input type="text" class="form-control" id="requester_middle_name" required>

                                    <div class="invalid-feedback">
                                        Please put a valid middle name.
                                    </div>

                                    </div>

                                </div>

                                <div class="container-xxl form-control" style="border:1px solid ">
                                    <label for="validationServer01" class="form-label" style="margin-bottom: 0%;"><span style="color: white;">*</span> Ext Name</label>
                                
                                    <div class="container-sm">
                                        <input type="text" class="form-control" value="N/A" id="requester_ext_name">
                                    <div class="invalid-feedback">
                                        Please put a valid extension name.
                                    </div>

                                    </div>

                                </div>

                                <div class="container-xxl form-control" style="border:1px solid ">
                                    <label for="validationServer01" class="form-label" style="margin-bottom: 0%;"><span style="color: red;">*</span> Birthdate</label>
                                
                                    <div class="container-sm">
                                        <input type="date" class="form-control" id="requester_birthdate" required>

                                    <div class="invalid-feedback">
                                        Please put a valid birthdate.
                                    </div>


                                    </div>



                                </div>

                                
                                <div class="container-xxl form-control" style="border:1px solid ">
                                    <label for="validationServer01" class="form-label" style="margin-bottom: 0%;"><span style="color: red;">*</span> Email Address</label>
                                
                                    <div class="container-sm">
                                        <input type="text" class="form-control" id="requester_email_address" required>
                                    <div class="invalid-feedback">
                                        Please put a valid email address.
                                    </div>



                                    </div>

                             

                                </div>

                                <div class="container-xxl form-control" style="border:1px solid ">
                                    <label for="validationServer01" class="form-label" style="margin-bottom: 0%;"><span style="color: red;">*</span> Mobile Number</label>
                                    <div class="container-sm">
                                        <input type="text" class="form-control" id="requester_mobile_number" required>
                                    <div class="invalid-feedback">
                                        Please put a valid mobile number.
                                    </div>
                                    </div>




                                </div>

                                <div class="container-xxl form-control" style="border:1px solid ">
                                    <label for="validationServer01" class="form-label" style="margin-bottom: 0%;"><span style="color: red;">*</span> Province</label>
                                
                                    <div class="container-sm">
                                        <select class="form-select" id="requester_province" aria-label="Default select example" required>
                                                <option disabled selected>Select Province</option>
                                        </select>

                                    <div class="invalid-feedback">
                                        Please put a valid province.
                                    </div>

                                    </div>

                                </div>

                                
                                <div class="container-xxl form-control" style="border:1px solid ">
                                    <label for="validationServer01" class="form-label" style="margin-bottom: 0%;"><span style="color: red;">*</span> City</label>
                                
                                    <div class="container-sm">
                                        <select class="form-select" id="requester_cities" aria-label="Default select example" required>
                                                <option disabled selected>Select City</option>
                                        </select>                                 
                                    <div class="invalid-feedback">
                                        Please put a valid city.
                                    </div>

                                    </div>
                                </div>

                                <div class="container-xxl form-control" style="border:1px solid ">
                                    <label for="validationServer01" class="form-label" style="margin-bottom: 0%;"><span style="color: red;">*</span> Barangay</label>
                                
                                    <div class="container-sm">
                                        <select class="form-select" id="requester_barangay" aria-label="Default select example" required>
                                                <option disabled selected>Select City</option>
                                        </select>   
                                    <div class="invalid-feedback">
                                        Please put a valid barangay.
                                    </div>

                                    </div>

                                </div>

                                <div class="container-xxl form-control" style="border:1px solid ">
                                    <label for="validationServer01" class="form-label" style="margin-bottom: 0%;"><span style="color: red;">*</span> Patient's Valid ID</label>
                                
                                    <div class="container-sm">
                                        <input type="file" class="form-control" id="requester_valid_id_cont" required>
                                    <div class="invalid-feedback">
                                        Please put a valid ID. Max file size: 5MB. Accepted formats: JPEG, PNG.
                                    </div>

                                    </div>

                                </div>

                            </form>
                        </div>
                        <div id="otp_container">
                        <div id="otp_label_container">
                            <label class="otp_label">Please enter the OTP code that has been sent to your email</label>
                        </div>

                        <form id="otp_form">
                            <div id="otp_input_container">
                                <input name="otp" class="otp_boxes" type="text" maxlength="1">
                                <input name="otp" class="otp_boxes" type="text" maxlength="1">
                                <input name="otp" class="otp_boxes" type="text" maxlength="1">
                                <input name="otp" class="otp_boxes" type="text" maxlength="1">
                                <input name="otp" class="otp_boxes" type="text" maxlength="1">
                                <input name="otp" class="otp_boxes" type="text" maxlength="1">
                            </div>
                            <div id="timer_otp_res_cont">
                                <label id="resend_otp_timer">2:00</label>
                                <label id="resend_otp">Resend code</label>
                            </div>
                            <button type="submit" id="otp_submit_but">Submit</button>
                        </form>


                            <div id="change_email_container">

                                <label style="cursor: pointer;">Change Email Address</label>

                            </div>

                       
                    </div> 
                    </div>

                    <footer id="modal_next_back_footer">

                            <button id="prevButton" class="btn btn-primary mr-2" disabled>Previous</button>
                            <button id="nextButton" class="btn btn-primary">Next</button>

                    </footer>
                    
                </div>
            </div>
        </div>
    </div>

    <footer id="main_footer">
            <div id="footer_content_left">
                <label>Bataan General Hospital and Medical Center</label>
                <label>Manahan St., Tenejero, Balanga City</label>
                <label>2100 Bataan, Philippines</label>
            </div>
            <div id="footer_content_right">
                <label class="footer_contact_label">Call Us:</label>
                <label class="footer_contact_label">(047) 237-9771 / 9772</label>
                <label class="footer_contact_label">Local: 4103 (IPD Records)</label>
            </div>
    </footer>     


    </script>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
 
<script>
        $(document).ready(function() {
            $('#prevButton').click(function() {
                $.ajax({
                    url: 'php/delete_cancel_row.php',
                    method: 'GET',
                    success: function(response) {
                        // Parse the JSON response
                        var jsonResponse = JSON.parse(response);
                        // Display the response
                        alert('Response: ' + jsonResponse.message);
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        alert('Request failed: ' + textStatus);
                    }
                });
            });
        });
    </script>

<script type="text/javascript" src="src/js/landingpage.js"></script>
</body>
</html>
