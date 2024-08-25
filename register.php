<?php
//data base connection details
$servername = "localhost";
$username = "root";
$password = '';
$dbname = "coffee_db";

// create connection
$conn = new mysqli($servername, $username, $password, $dbname);
//check connection
if ($conn -> connect_error){
    die("connection faild:" . $conn -> connect_error);
}
//haandle form submission
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];

//password and confirm password checking

if($password !== $confirm_password){
    echo "Password and confirm password do not match";
    exit();
}
//checking email already used another user

$hashed_password = password_hash($password, PASSWORD_DEFAULT);

$sql = "SELECT * FROM customers WHERE email = '$email'";
$result = $conn -> query($sql);

if($result -> num_rows == 1){
    echo "this email already used";
}else{

    //insert data in to the database
    $sql = "INSERT INTO customers (first_name, last_name, email, password) VALUES('$first_name', '$last_name', '$email', '$hashed_password')";

    if($conn -> query ($sql) === TRUE){
        header("Location: registration_success.php");
    }else{
        echo "error:" . $sql . "<br>" . $conn -> error;
    }
}


}