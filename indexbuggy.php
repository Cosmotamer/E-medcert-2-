<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.4/css/bulma.min.css" integrity="sha512-HqxHUkJM0SYcbvxUw5P60SzdOTy/QVwA1JJrvaXJv4q7lmbDZCmZaqz01UPOaQveoxfYRv1tHozWGPMcuTBuvQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />        <link rel="stylesheet" href="src/style/style.css">
    <link rel="stylesheet" href="src/style/e_certificate_landing_page.css">
    <link rel="stylesheet" href="src/style/e_certificate_copy_mediaq.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
<div id="main_container">
    <nav>
        <div id="label_logo">
            <img id="bghmc_logo" src="src/imgs/BGHMC_Logo.png">
            <label id="ecert_label">e-MEDCERT PORTAL</label>
        </div>
    </nav>
    <div id="landing_page_body_content">
        <div id="get_med_cert_label_cont">
            <label style="text-align: center; border: 1px solid red" id="get_med_cert_label">Get your medical certificate online in 3-easy Steps</label>
        </div>
        <div id="request_button_container">
            <button id="request_button" data-bs-toggle="modal" data-bs-target="#exampleModal1">Make a Request</button>
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
    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="false" style="overflow:hidden;">
        <div class="modal-dialog modal-lg" style="overflow:hidden;">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #049CF5;">
                    <label id="nav_label">DECLARATION and DATA PRIVACY NOTICE</label>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" style="justify-content: center; align-items: center; display:flex; flex-direction:column; overflow:hidden;">
                    <div id="modal_accept">
                        <div id="modal_content_1">
                            <p style="font-family: sans-serif;">
                                By continuing, I hereby certify that the information
                                I will declare in the Online Medical Certificate Request Form is true and complete.
                                I understand that my failure to answer or any false or misleading information given
                                by me may be used as a ground for the filing of civil case, criminal case, and administrative
                                (if applicable) case against me.
                            </p>
                        </div>
                        <div id="modal_content_2">
                            <p style="font-family: sans-serif;">
                                I also voluntarily and freely consent to the collection and sharing of my personal
                                sensitive information to Bataan General Hospital and Medical Center in compliance with
                                the Data Privacy Act.
                            </p>
                        </div>
                        <div id="modal_button_container">
                            <button id="modal_accept_but" class="modal_button" data-bs-toggle="modal" data-bs-target="#exampleModal3">Accept</button>
                            <button id="modal_decline_but" class="modal_button" data-bs-dismiss="modal" aria-label="Close">Decline</button>
                        </div>
                        <div id="modal_footer">
                            <label>NO PAYMENT SHALL BE COLLECTED TO SECURE MEDICAL CERTIFICATE</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="exampleModal3" data-bs-backdrop="static" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="false" style=" overflow:hidden;">
        <div class="modal-dialog modal-xl" style=" overflow:hidden;">
            <div class="modal-content">
                <div class="modal-header" style="  background-color: #049CF5;" >
                    <label id="nav_label">PATIENT and REQUESTER FORM</label>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" style="justify-content: center; align-items: center; display:flex; flex-direction:column; overflow:hidden; ">
                    <div id="request_form_requester_form">
                        <div id="request_form">
                            <form id="patient_form">
                            <div class="patient_registration_label_container">
                                <label style="margin-left: 1%;">PATIENT INFORMATION</label>
                            </div>
                            <div class="request_form_first_cont">
                                <div class="select_med_cert_container">
                                    <label><span style="color:red;">*</span> Select which medical certificate you require:</label>
                                </div>
                                <div class="cont_1_choices_container">
                                    <div class="cont_1_choices">
                                        <input name="medcert_options" id="confine" type="radio" value="Confinement" style="margin-bottom: 0.8%; margin-right:1%;" required>
                                        <label for="confine">Confinement</label>
                                    </div>
                                    <div class="cont_1_choices">
                                        <input name="medcert_options" id="telemed" type="radio" value="Telemedicine" style="margin-bottom: 0.8%; margin-right:1%;" required>
                                        <label for="telemed">Telemedicine</label>
                                    </div>
                                    <div class="cont_1_choices">
                                        <input name="medcert_options" id="opd_walk_in" type="radio" value="OPD Walk-in (Face-to-Face)" style="margin-bottom: 0.8%; margin-right:1%;" required>
                                        <label for="opd_walk_in">OPD Walk-in (Face-to-Face)</label>
                                    </div>  
                                </div>
                            </div>
                            <div class="request_form_second_cont">
                                <div class="select_department_label_container">
                                    <label><span style="color: red;">*</span> Select Department</label>
                                </div>
                                <div id="select_department_container">
                                    <select name="departments" id="departments">
                                        <option disabled selected>Select Department / Clinic</option>
                                    </select>
                                </div>
                            </div>
                            <div class="full_name">
                                <div class="label_cont">
                                    <label><span style="color: red;">*</span> Purpose of the medical certificate request</label>
                                </div>
                                <div class="textbox_cont">
                                    <select name="birthdate" id="request_purpose" class="full_name_textboxes">
                                        <option disabled selected>Select Purpose</option>
                                    </select>
                                </div>
                            </div>
                            <div class="request_form_third_cont">
                                <div class="select_consult_label_cont">
                                    <label><span style="color: red;">*</span> Select consultation/confinement date:</label>
                                </div>
                                <div class="select_consult_date_container">
                                    <input name="select_consult_date" id="select_consult_date" type="date" required>
                                </div>
                            </div>
                            <div class="full_name">
                                <div class="label_cont">
                                    <label><span style="color: red;">*</span> Last Name</label>
                                </div>
                                <div class="textbox_cont">
                                    <input id="last_name" name="last_name" class="full_name_textboxes" type="text" placeholder="Last Name" required>
                                </div>
                            </div>
                            <div class="full_name">
                                <div class="label_cont">
                                    <label><span style="color: red;">*</span> First Name</label>
                                </div>
                                <div class="textbox_cont">
                                    <input name="first_name" id="first_name" class="full_name_textboxes" type="text" placeholder="First Name" required>
                                </div>
                            </div>
                            <div class="full_name">
                                <div class="label_cont">
                                    <label><span style="color: red;">*</span> Middle Name</label>
                                </div>
                                <div class="textbox_cont">
                                    <input name="middle_name" id="middle_name" class="full_name_textboxes" type="text" placeholder="Middle Name" required>
                                </div>
                            </div>
                            <div class="full_name">
                                <div class="label_cont">
                                    <label><span style="color: white;">*</span> Extension Name</label>
                                </div>
                                <div class="textbox_cont">
                                    <input name="ext_name" id="ext_name" class="full_name_textboxes" type="text" placeholder="example: jr.">
                                </div>
                            </div>
                            <div class="full_name">
                                <div class="label_cont">
                                    <label><span style="color: red;">*</span> Birthdate of the patient</label>
                                </div>
                                <div class="textbox_cont">
                                    <input name="birthdate" id="birthdate" class="full_name_textboxes" type="date" placeholder="07/07/2000">
                                </div>
                            </div>

                            <div id="email_address_container">
                                <div class="label_cont">
                                    <label><span style="color: red;">*</span> Email Address</label>
                                </div>
                                <div class="textbox_cont">
                                    <input name="email" id="email_address" class="full_name_textboxes" type="text" placeholder="example@gmail.com">
                                </div>

                                <div id="invalid_email" class="error_message_container">Invalid Email</div>
                            </div>

                            <div class="full_name">
                                <div class="label_cont">
                                    <label><span style="color: red;">*</span> Patient's mobile number</label>
                                </div>
                                <div class="textbox_cont">
                                    <input name="mobilenumber" id="mobile_number" class="full_name_textboxes" type="text" placeholder="eg. 0912-345-6789">
                                </div>
                            </div>
                            <div class="full_name">
                                <div class="label_cont">
                                    <label><span style="color: red;">*</span> Province</label>
                                </div>
                                <div class="textbox_cont">
                                    <select id="province" name="province" class="full_name_textboxes" required>
                                        <option disabled selected>Select Province</option> 
                                    </select>
                                </div>
                            </div>
                            <div class="full_name">
                                <div class="label_cont">
                                    <label><span style="color: red;">*</span> City / Municipality</label>
                                </div>
                                <div class="textbox_cont">
                                    <select id="cities" name="cities" class="full_name_textboxes" required>
                                        <option disabled selected value="cities">Select City</option> 
                                    </select>
                                </div>
                            </div>
                            <div class="full_name">
                                <div class="label_cont">
                                    <label><span style="color: red;">*</span> Barangay</label>
                                </div>
                                <div class="textbox_cont">
                                    <select id="barangay" name="barangay" class="full_name_textboxes" required>
                                        <option disabled selected value="barangay">Select Barangay</option>  
                                    </select>
                                </div>
                            </div>
                            <div class="full_name2">
                                <div class="label_cont">
                                    <label><span style="color: red;">*</span> Patient's Valid ID</label>
                                </div>
                                <div class="textbox_cont">
                                    <input name="birthdate" id="patient_valid_id" class="full_name_textboxes" type="file">
                                    <small class="form-text text-muted">Max file size: 5MB. Accepted formats: JPEG, PNG.</small>

                                </div>

                                <div id="file_error" class="error_message_container" style="width: 96%;"></div>

                            </div>
                            </form>
                        </div>
                        <div id="gap"></div>
                        <div id="requester_form">
                            <form id="requester_form">
                            <div class="patient_registration_label_container">
                                <label style="margin-left: 1%;">REQUESTER INFORMATION</label>
                            </div>
                            <div class="request_for_myself_relative_container">
                                <div class="question_form_label_container">
                                    <label><span style="color:red;">*</span> Whose request form is this for?</label>
                                </div>
                                <div class="request_for_choice1">
                                    <input name="request_options" value="formyself" id="myself" type="radio" style="margin-bottom: 0.8%; margin-right:1%;" required>
                                    <label for ="myself">For myself</label>
                                </div>
                                <div class="request_for_choice1">
                                    <input name="request_options" value="formyrelatives" id="my_relative" type="radio" style="margin-bottom: 0.8%; margin-right:1%;" required>
                                    <label for="my_relative">For others:</label>
                                </div>

                                <div id="requester_relationship_container">

                                    <label>Relationship with the patient:</label>
                                    <select id="requester_relationship" name="requester_relationship" class="full_name_textboxes" style="width: 98%;  border: 1px solid gray;" required>
                                        <option disabled selected>Select Relationship</option> 
                                    </select>

                                </div>
                            </div>
                            <div class="full_name">
                                <div class="label_cont">
                                    <label><span style="color: red;">*</span> Last Name</label>
                                </div>
                                <div class="textbox_cont">
                                    <input id="requester_last_name" name="last_name" class="full_name_textboxes" type="text" placeholder="Last Name" required>
                                </div>
                            </div>
                            <div class="full_name">
                                <div class="label_cont">
                                    <label><span style="color: red;">*</span> First Name</label>
                                </div>
                                <div class="textbox_cont">
                                    <input name="first_name" id="requester_first_name" class="full_name_textboxes" type="text" placeholder="First Name" required>
                                </div>
                            </div>
                            <div class="full_name">
                                <div class="label_cont">
                                    <label><span style="color: red;">*</span> Middle Name</label>
                                </div>
                                <div class="textbox_cont">
                                    <input name="middle_name" id="requester_middle_name" class="full_name_textboxes" type="text" placeholder="Middle Name" required>
                                </div>
                            </div>
                            <div class="full_name">
                                <div class="label_cont">
                                    <label><span style="color: white;">*</span> Extension Name</label>
                                </div>
                                <div class="textbox_cont">
                                    <input name="ext_name" id="requester_ext_name" class="full_name_textboxes" type="text" placeholder="example: jr.">
                                </div>
                            </div>
                            <div class="full_name">
                                <div class="label_cont">
                                    <label><span style="color: red;">*</span> Birthdate of the requester</label>
                                </div>
                                <div class="textbox_cont">
                                    <input name="birthdate" id="requester_birthdate" class="full_name_textboxes" type="date" placeholder="07/07/2000">
                                </div>
                            </div>
                            <div id="email_address_container">
                                <div class="label_cont">
                                    <label><span style="color: red;">*</span> Email Address</label>
                                </div>
                                <div class="textbox_cont">
                                    <input name="email" id="requester_email_address" class="full_name_textboxes" type="text" placeholder="example@gmail.com">
                                </div>

                                <div id="requester_invalid_email" class="error_message_container">Invalid Email</div>
                            </div>
                            <div class="full_name">
                                <div class="label_cont">
                                    <label><span style="color: red;">*</span> Requester's mobile number</label>
                                </div>
                                <div class="textbox_cont">
                                    <input name="birthdate" id="requester_mobile_number" class="full_name_textboxes" type="text" placeholder="eg. 0912-345-6789">
                                </div>
                            </div>
                            <div class="full_name">
                                <div class="label_cont">
                                    <label><span style="color: red;">*</span> Province</label>
                                </div>
                                <div class="textbox_cont">
                                    <select id="requester_province" name="province" class="full_name_textboxes" required>
                                        <option disabled selected>Select Province</option> 
                                    </select>
                                </div>
                            </div>
                            <div class="full_name">
                                <div class="label_cont">
                                    <label><span style="color: red;">*</span> City / Municipality</label>
                                </div>
                                <div class="textbox_cont">
                                    <select id="requester_cities" name="cities" class="full_name_textboxes" required>
                                        <option disabled selected value="cities">City</option> 
                                    </select>
                                </div>
                            </div>
                            <div class="full_name">
                                <div class="label_cont">
                                    <label><span style="color: red;">*</span> Barangay</label>
                                </div>
                                <div class="textbox_cont">
                                    <select id="requester_barangay" name="barangay" class="full_name_textboxes" required>
                                        <option disabled selected value="barangay">Barangay</option>  
                                    </select>
                                </div>
                            </div>

                            <div class="full_name2">
                                <div class="label_cont">
                                    <label><span style="color: red;">*</span> Requester's Valid ID</label>
                                </div>
                                <div class="textbox_cont">
                                    <input name="birthdate" id="requester_valid_id" class="full_name_textboxes" type="file">
                                    <small class="form-text text-muted">Max file size: 5MB. Accepted formats: JPEG, PNG.</small>
                                </div>
                                <div id="req_file_error" class="error_message_container" style="width: 96%;"></div>

                            </div>
                            </form>
                            <div id="submit_cont">
                                <button type="submit" id="submit_but">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div id="otp_container">
                        <div id="otp_label_container">
                            <label class="otp_label">Please enter the OTP code that has been sent to your email</label>
                        </div>
                        <div id="otp_input_container">
                            <input name="otp" class="otp_boxes" type="text">
                            <input name="otp" class="otp_boxes" type="text">
                            <input name="otp" class="otp_boxes" type="text">
                            <input name="otp" class="otp_boxes" type="text">
                        </div>
                        <button id="otp_submit_but">Submit</button>
                        <div id="wrong_label_container">
                            <label id="wrong_otp" class="otp_label">Invalid OTP Code</label>
                        </div>
                    </div>                      
                </div>
            </div>
        </div>
    </div>
    <footer>
            <div id="footer_content_left">
                <label>Bataan General Hospital and Medical Center</label>
                <label>Manahan St., Tenejero, Balanga City</label>
                <label>2100 Bataan, Philippines</label>
            </div>
            <div id="footer_content_right">
                <label>Call Us:</label>
                <label>(047) 237-9771 / 9772</label>
                <label>Local: 4103 (IPD Records)</label>
            </div>
    </footer> 
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="src/js/landingpage.js"></script>
</body>
</html>
