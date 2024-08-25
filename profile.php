<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

// Get user data
$user_id = $_SESSION['user_id'];
$full_name = $_SESSION['full_name'];

?>

<!DOCTYPE html>
<html>
<head>
  <title>User Profile</title>
</head>
<body>
<section>
    <div class="nav_bar">
        <div class="nav_inner">
            <div class="logo">
                <h2>Aroma Cafe</h2>
            </div>
            <nav>
            <ul class="menuItems">
                <li><a href="index.php">Home</a></li>
                <li><a href="">Service</a></li>
                <li><a href="">Projects</a></li>
                <li><a href="">About Me</a></li>
                <li><a href="">Contact Me</a></li>
                
            </ul>
        </nav>
        <div class="profile">
            <a href=""><img src="images/1.png" width="26px" height="25px"></a>
            <a href=""><img src="images/2.png" width="26px" height="25px"></a>
            <a href="Login.php"><img src="images/3.png" width="26px" id="pro" height="25px"></a>

        </div>
    </div>
    </div>
</section>


<div class="row">
  <div class="col">
  <div class="textbox">
  <h2><span>Welcome to</span><br> <?php echo $full_name; ?></h2>
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum id beatae aliquam ea ipsum modi consequuntur, dolorem facilis! Quaerat similique architecto accusamus quibusdam error voluptate rem libero nemo sit laborum!</p>
  <div class="login_logout">
  <a href="edit_profile.php">Edit Profile</a>
  <a href="logout.php">Logout</a>
  </div>
  </div>
  </div>
  <div class="col">
    <img src="images/333.jpg" alt="">
  </div>
</div>
</body>
<Style>
  @import url('https://fonts.googleapis.com/css2?family=Heebo:wght@300;400;500;600;700;800;900&display=swap');


  *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family:Heebo ,'sans serif';
  }
  body{
    width: 100%;
    height: 100vh;
    background: #F5EBDF;
  }
  .nav_bar{
    width: 100%;
    height: 70px;
    background: #fff;
    position: fixed;
    z-index: 10;
}
.logo h2{
    font-size: 2em;
    font-family: heebo, 'sanserif';
    font-weight: 700;
    cursor: pointer;
    color: #E56B6F;
}

nav ul{
    list-style-type: none;

}
nav ul li{
    display: inline-block;
    margin-right: 20px;


}
nav ul li a{
    font-family: heebo, sans-serif;
    font-weight: 500;
    text-decoration: none;
    font-size: 18px;
    color: #000;

}
.nav_inner{
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding:10px 30px;
    margin: 6px 10px;
}
.profile a{
    padding: 10px;
}


  .row{
    display: flex;
    flex-wrap: wrap;
  }
  .col{
    flex-basis: 50%;
    height: 100Vh;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
  }
  .col img{
    height: 100vh;
    width: 100%
  }
  .textbox{
    display: flex;
    flex-direction: column;
    justify-content: start;
  }
  h2{
    font-family:Heebo ,'sans serif';
    color: #000;
    font-weight: 300;
    font-size: 3.5em;
    line-height: 100%;
    margin-bottom: 15px;
  }
  span{
    font-size: 1.4em;
    font-weight: 900;
    color: #E56B6F;

  }
  p{
    max-width: 400px;
    font-size: 1em;
    font-weight: 400;
    color: #000;
  }
  .login_logout{
    display: flex;
    flex-direction: row;
    margin-top: 15px;
  }
  .login_logout a{
    margin: 0 10px;
    text-decoration: none;
    color: red;
    transition: 0.5 all;

  }
  .login_logout a:hover{
    color: #000;
    transform: translateX(10px);
  }


</Style>
</html>