<!DOCTYPE html>
<html>
<head>
  <title>Forgot Password</title>
</head>
<body>
<div class="nav_logo" >
        <a href="index.php"><img src="images/Logo.png" alt="" width="150px" height="75px"></a>
    </div>
  <div class="box">
  <img src="images/think2.png">
  <div class="inner">
  <h1>If you forget your account password..? <br>Dont' worry..!</h1>
  <p>!"Step into recovery: Enter email, receive OTP code via email, reset password."</p>
  <form action="send_reset_code.php" method="post">
    <input type="email" name="email" placeholder="Enter your email" required></br>
    <button type="submit" name="submit">Submit</button>
  </form>
  </div>
  </div>
</body>
<style>
      @import url('https://fonts.googleapis.com/css2?family=Heebo:wght@300;400;500;600;700;800;900&display=swap');
  *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: heebo, 'sanserif'
  }
  body{
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
    height: 100vh;
    background: #F5EBDF;
  }
  .nav_logo{
    width: 100%;
    display: flex;
    justify-content: left;
    position: absolute;
    top: 0;
    left: 0;
    z-index: 10;
    background: #705135;
    height: 70px;
  }
  .box img{
    margin: 10px 20px;
    width: 200px;
    height: 300px;
  }
  .box{
    position: relative;
    display: flex;
    align-items: center;
    width: 580px;
    min-height: 350px;
    border-radius: 15px;
    box-shadow: 10px 10px 20px rgba(0, 0, 0, 0.25);
  }
  h1{
    font-size: 2em;
    line-height: 120%;
    margin: 12px 10px
  }
  p{
    margin: 5px 10px

  }
  .inner {
    display: flex;
    flex-direction: column;
  }
  form input{
    padding: 10px 50px;
    border-radius: 15px;
    margin: 10px 0;
  }
  form button{
    cursor: pointer;
    padding: 8px 40px;
    border: none;
    border-radius: 15px;
    color: #fff;
    background: #AB3F26;
    margin-top: 6px;
  }
  
  </style>
</html>