<?php
include '../dbconnection/db.php';
include $_SERVER['DOCUMENT_ROOT'].'/session.php';

include("../PHPMailer-6.8.1/PHPMailer-6.8.1/src/PHPMailer.php");
include("../PHPMailer-6.8.1/PHPMailer-6.8.1/src/SMTP.php"); // Optional for SMTP support
include("../PHPMailer-6.8.1/PHPMailer-6.8.1/src/Exception.php"); // Optional for error handling

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);

function generateOTP($secretKey, $counter) {
    $hash = hash_hmac('sha1', pack('N*', 0) . pack('N*', $counter), hex2bin($secretKey));
    $offset = hexdec(substr($hash, -1)) & 0xF;
    $otp = (hexdec(substr($hash, $offset * 2, 8)) & 0x7FFFFFFF) % 900000 + 100000;
    return str_pad($otp, 6, '0', STR_PAD_LEFT);
}

// Function to generate a random secret key
function generateRandomKey($length) {
    $randomBytes = random_bytes($length);
    return bin2hex($randomBytes);
}

$secretKeyLength = 32;
$secretKey = generateRandomKey($secretKeyLength);

// Generate OTP using the randomly generated secret key and a counter
$counter = 123456; // Example counter value
$OTP = generateOTP($secretKey, $counter);
$_SESSION['OTP'] = $OTP;

// Initialize a counter for letters
$letterCount = 0;

// Iterate through each character in the string
for ($i = 0; $i < strlen($OTP); $i++) {
    // Check if the character is a letter
    if (ctype_alpha($OTP[$i])) {
        $letterCount++;
    }
}

echo strlen($OTP);
if (strlen($OTP) <= 5) {
    while (strlen($OTP) <= 5) {
        $OTP = generateOTP($secretKey, $counter);
    }
}

// Retrieve email address from the POST request
$pat_email_address = "cosmotamer@gmail.com";

// SENDING EMAIL
try {
    // Server settings
    $mail->SMTPDebug = SMTP::DEBUG_OFF; // Set the debugging level (options: DEBUG_OFF, DEBUG_CLIENT, DEBUG_SERVER)
    $mail->isSMTP(); // Set mailer to use SMTP
    $mail->AuthType = 'PLAIN';
    $mail->Host = 'smtp.gmail.com'; // Specify your SMTP server
    $mail->SMTPAuth = true; // Enable SMTP authentication
    $mail->Username = 'bataansdn123@gmail.com'; // SMTP username 
    $mail->Password = 'swcvfvzikdmezzak'; // SMTP password
    $mail->SMTPSecure = 'tls'; // Enable TLS encryption, 'ssl' also accepted
    $mail->Port = 587; // TCP port to connect to

    // Recipients
    $mail->addAddress($pat_email_address);
    // Content
    $mail->isHTML(true); // Set email format to HTML
    $mail->Subject = 'Job Order';
    $mail->Body = $OTP; // OTP value from sdn_reg
    $mail->AltBody = 'This is the plain text message body';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
?>
