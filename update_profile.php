<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    header('Location: Login.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Database connection setup
    $db_host = 'localhost';
    $db_user = 'root';
    $db_pass = '';
    $db_name = 'coffee_db';
    
    $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

    // Retrieve form data
    $user_id = $_SESSION['user_id'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Validate input
    // Add more validation and error handling as needed

    // Check if the email is already taken by another user
    $query = "SELECT id FROM customers WHERE email = '$email' AND id <> $user_id";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        die("Email is already taken.");
    }

    // Update user data in the database
    $update_query = "UPDATE customers SET first_name = '$first_name', last_name = '$last_name', email = '$email'";

    if (!empty($password)) {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $update_query .= ", password = '$hashed_password'";
    }

    $update_query .= " WHERE id = $user_id";

    mysqli_query($conn, $update_query);
    mysqli_close($conn);

    // Update session data
    $_SESSION['full_name'] = $first_name . ' ' . $last_name;
    $_SESSION['email'] = $email;

    // Redirect to the user profile page
    header('Location: profile.php');
    exit();
}
?>
