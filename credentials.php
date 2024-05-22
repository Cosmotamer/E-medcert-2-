<?php
include './dbconnection/db.php';
include $_SERVER['DOCUMENT_ROOT'].'/session.php';



if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    try {
        $stmt = $pdo->prepare('SELECT * FROM users WHERE username = ? AND password = ?');
        $stmt->execute([$username, $password]);
        $data_child = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Check if there is a matching user
        if ($data_child) {
            // Store the fullname in the session
            $fullname = $data_child[0]['fullname'];
            // Store the fullname in the session
            $_SESSION['fullname'] = $fullname;// Assuming fullname is in the 4th column
            // Redirect to records.php if authentication succeeds
            header('Location: ./records.php');
            exit(); // Terminate script execution after redirection
        } else {

            $_SESSION['alertMessage'] = 'Invalid username or password';
            // If no matching user is found, display an error message
            header('Location: ./prac/test_2.php');
            exit();
           
        }
    } catch (PDOException $e) {
        // Handle any database connection errors
        echo 'Database error: ' . $e->getMessage();
    }
}
?>
