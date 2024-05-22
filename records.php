<?php 
    session_start();
    include './src/db/api_conn_class.php';
    // include 'session.php';

   // Check if the user is logged in by verifying if the fullname session variable is set
if(isset($_SESSION['fullname'])) {
    // If logged in, display the fullname
} else {
    // If not logged in, redirect to the login page or display a message
    echo 'You are not logged in.';
}




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="src/style/searchpanes.css">
    <link rel="stylesheet" href="src/style/records.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/2.0.2/css/dataTables.dataTables.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/searchpanes/2.3.0/css/searchPanes.dataTables.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/select/2.0.0/css/select.dataTables.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/buttons/3.0.1/css/buttons.dataTables.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
    <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css">


    <!-- DataTables CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
 
    
</head>
<body>

    <div id="mama_div">

        <nav>
            <div id="user_container">
                <img id="bghmc_logo" src="/src/imgs/BGHMC_Logo.png">
                <label id="user_fullname" style="font-size: 16pt;"><?php echo $_SESSION['fullname']; ?></label>
            </div>
            <div id="nav_features_container">
             
            </div>

            <div id="nav_right_side_cont">

                <div id="home_label" style="margin-right: 10px;">
                    <label>Home</label>
                </div>

                <div id="arrow_down_container">
                    <i class="fa-solid fa-caret-down"></i>
                </div>

            </div>
        </nav>

        <div id="drop_down_div">
            
            <div class="drop_down_content_style" id="acc_settings_cont" style="border: 1px solid white;">Account Settings</div>
            <div class="drop_down_content_style" id="history_log_cont" style="border: 1px solid white;">History Log</div>
            <div class="drop_down_content_style" id="logout_cont" style="border: 1px solid white;"  onclick="logout()">Log Out</div>

        </div>


        <div id="emedcert_queue" class="contents_container">
        <div id="emedcert_label_container">
            <label style="font-size:2rem; color:white;">e-Medcert Queue</label>
        </div>

        <div class="dtsp-verticalContainer" style=" border-radius:7px;">
        <div class="dtsp-verticalPanes" style="margin-top:1px;"></div>
        <div class="container" style="border:2px solid yellow; border-radius:7px; margin-top:17px; width:1000px;">
            <table id="example" class="display nowrap" style="width: 100%;">
                <thead>
                    <tr>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
        </div>
        

    <div id="process_modal" class="modal fade" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1" style="overflow: hidden;" >
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content" style="height: 800px;">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Patient's Name</h1>
                <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Requester's Name</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" style="overflow: auto; padding:0; margin:0;">

                <div id="patient_requester_information">
                <div id="patient_form_container">

                    <div id="patient_form">

                        <div class="container-lg" id="medical_for">

                        <label style="font-weight:bold;">Medical Certificate type:</label>
                        <label>Confinement</label>

                        </div>

                        <div class="container-lg" id="medical_for">

                        <label style="font-weight:bold;">Department/Clinic:</label>
                        <label>OPD</label>

                        </div>

                        <div class="container-lg" id="medical_for">

                        <label style="font-weight:bold;">Purpose of the medical certificate request:</label>
                        <label>Insurance</label>

                        </div>

                        <div class="container-lg" id="medical_for">

                        <label style="font-weight:bold;">Consultation/confinement date:</label>
                        <label>01/21/2024</label>

                        </div>

                        <div class="container-lg" id="medical_for">

                        <label style="font-weight:bold;">Patient's Last Name:</label>
                        <label>Delos Reyes</label>

                        </div>

                        <div class="container-lg" id="medical_for">

                        <label style="font-weight:bold;">Patient's First Name</label>
                        <label>Julius</label>

                        </div>

                        <div class="container-lg" id="medical_for">

                        <label style="font-weight:bold;">Patient's Middle Name</label>
                        <label>Estrada</label>

                        </div>

                        <div class="container-lg" id="medical_for">

                        <label style="font-weight:bold;"> Extension Name</label>
                        <label>N/A</label>

                        </div>

                         <div class="container-lg" id="medical_for">

                        <label style="font-weight:bold;">Birthdate</label>
                        <label>07/07/2000</label>

                        </div>

                         <div class="container-lg" id="medical_for">

                        <label style="font-weight:bold;"> Email Address</label>
                        <label>juliusdelosreyes89@gmail.com</label></label>

                        </div>

                        <div class="container-lg" id="medical_for">

                        <label style="font-weight:bold;">Mobile Number</label>
                        <label>09388419364</label>

                        </div>

                        <div class="container-lg" id="medical_for">

                        <label style="font-weight:bold;">Province</label>
                        <label>Bataan</label>

                        </div>

                        <div class="container-lg" id="medical_for">

                        <label style="font-weight:bold;">City</label>
                        <label>Abucay</label>

                        </div>

                        <div class="container-lg" id="medical_for">

                        <label style="font-weight:bold;">Barangay</label>
                        <label>Salian</label>

                        </div>

                        <div class="container-lg" id="medical_for">

                        <label style="font-weight:bold;">Patient's valid ID</label>
                        
                        <div id="enlargedModal" class="modal">
                        <span class="close">&times;</span>
                        <img class="modal-content" id="enlargedImg">
                        </div>

                        <a href="#" id="enlargeImage">
                            <img src="/3418448.jpg" width="200" height="80%" alt=""/>
                        </a>

                        </div>

                    </div>

                </div>

                <div id="records_gap">


                </div>

                <div id="requester_information">

                    <div class="container-lg" id="medical_for">

                        <label style="font-weight:bold;">Medical Certificate request for?:</label>
                        <label>Mysel</label>

                    </div>

                    <div class="container-lg" id="medical_for">

                        <label style="font-weight:bold;">Last Name:</label>
                        <label>Confinement</label>

                    </div>

                    <div class="container-lg" id="medical_for">

                        <label style="font-weight:bold;">First Name:</label>
                        <label>Confinement</label>

                    </div>

                    <div class="container-lg" id="medical_for">

                        <label style="font-weight:bold;">Middle Name:</label>
                        <label>Confinement</label>

                    </div>

                    <div class="container-lg" id="medical_for">

                        <label style="font-weight:bold;">Extension Name:</label>
                        <label>N/A</label>

                    </div>

                    <div class="container-lg" id="medical_for">

                        <label style="font-weight:bold;">Birthdate:</label>
                        <label>01/02/2024</label>

                    </div>

                    <div class="container-lg" id="medical_for">

                        <label style="font-weight:bold;">Email Address:</label>
                        <label>juliusdelosreyes89@pyupyu.com</label>

                    </div>

                    <div class="container-lg" id="medical_for">

                        <label style="font-weight:bold;">Mobile Number:</label>
                        <label>09123456789</label>

                    </div>

                    <div class="container-lg" id="medical_for">

                        <label style="font-weight:bold;">Province:</label>
                        <label>Bataan</label>

                    </div>

                    <div class="container-lg" id="medical_for">

                        <label style="font-weight:bold;">City:</label>
                        <label>Abucay</label>

                    </div>

                    <div class="container-lg" id="medical_for">

                        <label style="font-weight:bold;">Barangay:</label>
                        <label>Salian</label>

                    </div>

                    <div class="container-lg" id="medical_for">

                        <label style="font-weight:bold;">Patient's valid ID</label>

                        <div id="enlargedModal" class="modal">
                        <span class="close">&times;</span>
                        <img class="modal-content" id="enlargedImg">
                        </div>

                        <a href="#" id="enlargeImage">
                            <img src="/3418448.jpg" width="200" height="80%" alt=""/>
                        </a>

                    </div>

                </div>

            </div>
        </div>

        <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Decline</button>
        <button id="approve_button" type="button" class="btn btn-success">Approve</button>
      </div>
    </div>
</div>   
    </div>

    </div>



    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/2.0.2/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/searchpanes/2.3.0/js/dataTables.searchPanes.js"></script>
    <script src="https://cdn.datatables.net/searchpanes/2.3.0/js/searchPanes.dataTables.js"></script>
    <script src="https://cdn.datatables.net/select/2.0.0/js/dataTables.select.js"></script>
    <script src="https://cdn.datatables.net/select/2.0.0/js/select.dataTables.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.0.1/js/buttons.dataTables.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="/src/js/records.js"></script>
    <script src="/src/js/logout.js"></script>
    
</body>
</html>
