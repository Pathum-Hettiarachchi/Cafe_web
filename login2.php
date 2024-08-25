<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Database connection setup
    $db_host = 'localhost';
    $db_user = 'root';
    $db_pass = '';
    $db_name = 'coffee_db';
    
    $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

    // Retrieve form data
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validate input
    // Add more validation and error handling as needed

    // Check if the user exists in the database
    $query = "SELECT id, first_name, last_name, email, password FROM customers WHERE email = '$email'";
    $result = mysqli_query($conn, $query);
    $user = mysqli_fetch_assoc($result);

    if ($user && password_verify($password, $user['password'])) {
        // Start the session and store user data
        session_start();
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['full_name'] = $user['first_name'] . ' ' . $user['last_name'];

        // Redirect to the user profile page
        header('Location: profile.php');
        exit();
    } else {
        echo "Invalid email or password.";
    }

    mysqli_close($conn);
}
?>