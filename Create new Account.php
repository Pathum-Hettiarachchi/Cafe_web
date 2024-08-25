<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/admin.css">
    <title>Document</title>
</head>
<body>
    <div class="nav_logo" >
        <img src="images/Logo.png" alt="" width="150px" height="75px"> 
    </div>
    <div class="container">
        <div class="left-side">
            <div class="img_box">
            <img src="images/coffee cup.png">
            </div>
        </div>
          <!-- Content for the left side -->
        <div class="right-side">
          <div class="loging_box2">
            <h1>Create New Account</h1>
            <form action="register.php" method="post">
            <div class="input_box">
                <div class="name_box">
                    <input type="text" name="first_name" placeholder="First Name">
                    <input type="text" name="last_name" placeholder="Last Name">
                </div>
                <input type="email" name="email" placeholder="Enter Your Email" required>
                <input type="password" name="password" placeholder="Enter Password" required>
                <input type="password" name="confirm_password" placeholder="Conform Password" required>
                <input type="submit" id="btn" value="Create account">
            </div>
            </form>
            <p>Already have an account ?  <a href="Login.php"><span>Log in here</span></a></p>
    
            <div class="quick_box">
                <div class="google">
                    <a href="">
                        <img src="images/google.png" width="30px">
                        <p>Sign With Google</p>
                    </a>
                </div>
    
                <div class="google">
                    <a href="">
                        <img src="images/facebook.png" width="30px">
                        <p>Sign With Facebook</p>
                    </a>
                </div>
            </div>
        </div>
    
</body>
</html>