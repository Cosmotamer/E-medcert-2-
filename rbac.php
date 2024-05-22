<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Menu Simulation</title>

<style>
    .sub-menu {
        display: none;
    }
    .show-menu {
        display: block !important;
    }
</style>
</head>
<body>

<!-- 
    Menu Item 
    data-attribute : data-menu(menu name)

    Sub Item
    data-attribute: data-sub-menu(submenu name)    
-->
<div class="item" data-menu="registration">
    <a class="sub-btn">Registration<i class="fas fa-angle-right dropdown"></i></a>
    <!-- Sub-Menu -->
    <div class="sub-menu">
        <a href="#" class="sub-item" data-sub-menu="register_patient">Register Patient</a>
        <a href="#" class="sub-item" data-sub-menu="edit_registration">Edit Registration</a>
        <a href="#" class="sub-item" data-sub-menu="view_registration_list">Registration List</a>
    </div>
</div>

<div class="item" data-menu="admission">
    <a class="sub-btn">Admission<i class="fas fa-angle-right dropdown"></i></a>
    <div class="sub-menu">
        <a href="#" class="sub-item" data-sub-menu="admit_patient">Admit Patient</a>
        <a href="#" class="sub-item" data-sub-menu="view_admission_list">Admission List</a> 
        <a href="#" class="sub-item" data-sub-menu="view_discharged_list">Discharged List</a>
    </div>
</div>


<script src="https://kit.fontawesome.com/a076d05399.js"></script>

<script>
    // Simulate user permissions and role (for testing)
    var userPermissions = {
        "user": {
            "registration": ["register_patient", "edit_registration", "view_registration_list"]
        },
        "admin": {
            "registration": ["register_patient", "edit_registration", "view_registration_list"],
            "admission": ["admit_patient", "view_admission_list", "view_discharged_list"]
        }
    };

    // Function to update menu visibility based on user permissions
    function updateMenuVisibility(userPermissions) {
        // Get all menu items
        var menuItems = document.querySelectorAll('.item');
        
        // Loop through each menu item
        menuItems.forEach(function(menuItem) {
            // Get the menu data attribute value
            var menu = menuItem.getAttribute('data-menu');
            var userRole = 'admin'; // Simulate user role, change as needed

            // Check if the menu should be shown based on user role and permissions
            if (userPermissions[userRole][menu]) {
                // Show the menu item
                menuItem.style.display = 'block';
                
                // If the menu item has a sub-menu, check permissions for sub-menu items
                var subMenu = menuItem.querySelector('.sub-menu');
                if (subMenu) {
                    subMenu.classList.add('show-menu'); // Show sub-menu container
                    var subItems = subMenu.querySelectorAll('.sub-item');
                    subItems.forEach(function(subItem) {
                        var subMenuItem = subItem.getAttribute('data-sub-menu');
                        if (userPermissions[userRole][menu].includes(subMenuItem)) {
                            subItem.style.display = 'block';
                        } else {
                            subItem.style.display = 'none';
                        }
                    });
                }
            } else {
                // Hide the menu item
                menuItem.style.display = 'none';
            }
        });
    }

    // Call the updateMenuVisibility function with the simulated user permissions
    updateMenuVisibility(userPermissions);
</script>


</body>
</html>
