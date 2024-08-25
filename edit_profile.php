<!DOCTYPE html>
<html>
<head>
  <title>Edit Profile</title>
</head>
<body>
  
  <div class="inputbox">
  <form action="update_profile.php" method="post">
  <h2>Edit Profile</h2>
  <img src="images/888.gif" alt="">
    <input type="text" name="first_name" placeholder="First Name" required>
    <input type="text" name="last_name" placeholder="Last Name" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="New Password">
    <input type="password" name="confirm_password" placeholder="Confirm New Password">
    <button type="submit">Save Changes</button>
  </form>
  </div>
</body>
<style>
  *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }
  body{
    width: 100%;
    height: 100vh;
    background: #F5EBDF;
    display: flex;
    justify-content: center;
    align-items: center;
  }
  form{
    display: flex;
    flex-direction: column;
    align-items: center;
    width: 500px;
    padding: 15px;
    border: 1px solid #000;


  }
  form img{
    width: 200px;
    margin: 10px 0;
  }
  form input{
    width: 100%;
    padding: 12px;
    margin: 10px 0;
    border-radius: 10px;
    border: 1px solid #000;
  }
  form button{
    cursor: pointer;
    padding: 10px 40px;
    background: none;
    margin: 10px 0;
    font-weight: 700;
    border: 1px solid #000;
    border-radius: 12px;
    transition: 0.5s all;
  }
  form button:hover{
    background: #AB3F26;
    border-radius: 25px;
    color: #fff;
    border: none;
  }

</style>
</html>
