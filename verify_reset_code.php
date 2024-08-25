<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'coffee_db';

// Sanitize user input
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $otp_1 = isset($_POST["otp_1"]) ? htmlspecialchars($_POST["otp_1"]) : "";
    $otp_2 = isset($_POST["otp_2"]) ? htmlspecialchars($_POST["otp_2"]) : "";
    $otp_3 = isset($_POST["otp_3"]) ? htmlspecialchars($_POST["otp_3"]) : "";
    $otp_4 = isset($_POST["otp_4"]) ? htmlspecialchars($_POST["otp_4"]) : "";

    // Check if all OTP fields are filled
    if (empty($otp_1) || empty($otp_2) || empty($otp_3) || empty($otp_4)) {
        header('Location: enter_code.php?error=1');
        exit();
    }

    $entered_otp = $otp_1 . $otp_2 . $otp_3 . $otp_4;
}

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $reset_code = $entered_otp;

        // Use prepared statement and check code expiration
        $stmt = $conn->prepare("SELECT id FROM reset_codes WHERE code = :reset_code AND expiry_time >= NOW()");
        $stmt->bindParam(':reset_code', $reset_code);
        $stmt->execute();

        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($result) {
            // If the code is valid, redirect the user to a new page to reset their password (create reset_password.php)
            // Pass the user_id as a query parameter to reset_password.php
            header("Location: reset_password.php?user_id={$result['id']}");
            exit();
        } else {
            // If the code is invalid, show an error message or redirect back to the "Enter Code" page with an error message
            header('Location: enter_code.php?error=1');
            exit();
        }
    }
} catch (PDOException $e) {
    // Handle any database connection or query errors
    error_log("Database Error: " . $e->getMessage()); // Log the error
    die("An unexpected error occurred.");
}
