
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
        <a href="index.php"><img src="images/Logo.png" alt="" width="150px" height="75px"></a>
    </div>
  <div class="container">
    <div class="left-side">
        <div class="img_box">
        <img src="images/cup.png" alt="">
        <h2>Aroma Coffee</h2>
        <div class="underline"></div>
        <p>Indulge in Aroma's top coffee flavors. Join us for an unforgettable coffee journey!.</p>
        </div>
    </div>
      <!-- Content for the left side -->
    <div class="right-side">
      <div class="loging_box">
        <h1>Log in</h1>
        <div class="input_box">
            <form action="login2.php" method="post">
            <input type="email" name="email" id="" placeholder="Enter Your Email Here" required>
            <input type="password" name="password" id="" placeholder="Enter Your Password Here" required>
            <input type="submit" id="btn" value="Log in">
            </form>
        </div>
        <p>Don't Have an Account ?  <a href="Create new Account.php"><span>Create New Account</span></a></p>
        <p>Forgot Password  <a href="forgot_password.php"><span>Forgot Password</span></a></p>

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




  </div>
  </div>
</body>
</html>
