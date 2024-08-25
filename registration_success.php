<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="box">
    <img src="images/coffee shop.png" alt="">
    <h1>You're Succesfully Registered On <br><span>Aroma Cafe</span></h1>
    <p>You can log in your account here ....</p>
    <a href="Login.php"><button>Sign In</button></a>
    </div>
</body>
<style>

    @import url('https://fonts.googleapis.com/css2?family=Heebo:wght@300;400;500;600;700;800;900&display=swap');

    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: heebo,'sans serif';
    }
    body{
        width: 100%;
        height: 100vh;
        background: #F5EBDF;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .box{
        position: relative;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }
    .box img{
        margin-bottom: 15px;
    }
    .box h1{
        line-height: 100%;
        font-size: 2.5em;
        text-align: center;
        margin: 10px 0;
    }
    .box h1 span{
        color: #AB3F26;
    }
    .box p{
        font-size: 1.5em;
        font-weight: 500;
        margin-bottom: 6px;
    }
    .box a button{
        border: 2px solid #000;
        cursor: pointer;
        background: none;
        padding: 7px 40px;
        font-weight: 700;
        font-size: 1em;
        border-radius: 10px;
        transition: 0.5s all;
    }
    .box a button:hover{
        background: #AB3F26;
        border: none;
        color: #fff;
        border-radius: 25px;
    }
</style>
</html>