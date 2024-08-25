<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

function generateRandomCode() {
    $characters = '0123456789';
    $code = '';
    for ($i = 0; $i < 4; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $code .= $characters[$index];
    }
    return $code;
}

$gmail_username = 'devpathum21@gmail.com';
$gmail_password = 'ghezoedsnefiptpi';

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'coffee_db';

// Database connection using PDO
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database Error: " . $e->getMessage());
}

if (isset($_POST['submit'])) {
    $email = $_POST['email'];

    // Check if the email exists in the database
    $query = "SELECT * FROM customers WHERE email = :email";
    $stmt = $conn->prepare($query);
    $stmt->execute(['email' => $email]);
    $result = $stmt->fetch();

    if ($result) {
        $code = generateRandomCode();

        $expiry_time = date('Y-m-d H:i:s', strtotime('+10 minutes'));

        // Save the code and email in the database
        $stmt = $conn->prepare("INSERT INTO reset_codes (code, email, expiry_time) VALUES (:code, :email, :expiry_time)");
        $stmt->bindParam(':code', $code);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':expiry_time', $expiry_time);
        $stmt->execute();

        // Send the email using PHPMailer
        $mail = new PHPMailer(true);
        try {
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = $gmail_username;
            $mail->Password   = $gmail_password;
            $mail->SMTPSecure = 'tls';
            $mail->Port       = 587;

            $mail->setFrom($gmail_username, 'Aroma cafe official');
            $mail->addAddress($email);

            $mail->isHTML(true);
            $mail->Subject = 'Password Reset Code';
            $mail->Body    = 
            '
    <html>
    <head>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f5f5f5;
            }
            .main-containner{
                width: 100%;
                height: 300px;
                background: #F5EBDF;
                display: flex;
                justify-content: center;
                align-items: center;
            }
            .container {
                max-width: 400px;
                heigh: 200px;
                margin: 0 auto;
                padding: 20px;
                background-color: blue;
                border-radius: 10px;
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            }
            h1 {
                color: #E56B6F;
            }

            @media screen and (max-width: 768px) {
                .container {
                    padding: 15px;
                }
                h1 {
                    font-size: 24px;
                }
            }
        </style>
    </head>
    <body>
    <div class="main-containner">
        <div class="container">
            <h1>Your Password Reset Code</h1>
            <p>Your password reset code: <strong>' . $code . '</strong></p>
        </div>
    </div>
    </body>
    </html>
';

            $mail->send();

            header('Location: enter_code.php');
            exit();
        } catch (Exception $e) {
            echo "Email could not be sent. Error: {$mail->ErrorInfo}";
        }
    } else {
        echo "Email not found. Please enter a valid email address.";
    }
}
?>
