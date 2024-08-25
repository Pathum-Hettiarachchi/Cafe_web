<!DOCTYPE html>
<html>
<head>
  <title>Enter Code</title>
</head>
<body>
    <div class="form-container">
  <form action="verify_reset_code.php" method="post">
  <img src="images/444.gif" alt="">
  <h2>Enter Reset Code</h2>
  <p>Elevate Your Access: Reset Code Sent to Your Inbox!</p>
  <div class="input_box">
        <input type="text" name="otp_1" autocomplete="off" maxlength="1" onkeyup="moveToNext(this, 'otp_2')" required>
        <input type="text" name="otp_2" autocomplete="off" maxlength="1" onkeyup="moveToNext(this, 'otp_3')" required>
        <input type="text" name="otp_3" autocomplete="off" maxlength="1" onkeyup="moveToNext(this, 'otp_4')" required>
        <input type="text" name="otp_4" autocomplete="off" maxlength="1" onkeyup="moveToNext(this, 'otp_5')" required>
  </div>
    <button type="submit">Submit</button>
  </form>
  </div>
</body>
<style>
        @import url('https://fonts.googleapis.com/css2?family=Heebo:wght@300;400;500;600;700;800;900&display=swap');
  *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: heebo, 'sanserif';
  }
  body{
    width: 100%;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    background: #F5EBDF;
  }
  h2{
    font-size: 2em;
    color: #E56B6F;
    line-height: 80%;
    margin-top: 10px;
  }
  p{
    text-align: center;
    margin: 8px 0;
  }

.form-container {
  display: flex;
  flex-direction: column;
  align-items: center;
  padding: 15px;
  box-shadow: 10px 10px 20px rgba(0, 0, 0, 0.25);
  margin: 12px;
}

img {
  width: 100%;
  max-height: 350px;
  border-radius: 15px;
}

form {
  width: 100%;
  max-width: 500px;
  display: flex;
  flex-direction: column;
  align-items: center;
  margin-top: 15px;
}

input {
  caret-color: blue;
  width: 80%;
  max-width: 80px;
  height: 80px;
  text-align: center;
  font-size: 3em;
  font-weight: 700;
  border-radius: 15px;
  border: 2px solid #E56B6F;
  color: #E56B6F;
  margin-bottom: 10px;
}

button {
  width: 40%;
  max-width: 200px;
  padding: 8px;
  font-size: 1.5em;
  font-weight: 700;
  background-color: #E56B6F;
  color: white;
  border: none;
  border-radius: 25px;
  cursor: pointer;
  margin: 10px 0;
  transition: .5s all;
}
button:hover{
  background: #a04b4e;
}
</style>

<script>
  function moveToNext(currentInput, nextInputName) {
    if (currentInput.value.length === currentInput.maxLength) {
      const nextInput = document.getElementsByName(nextInputName)[0];
      nextInput.focus();
    } else if (currentInput.value.length === 0) {
      const previousInput = currentInput.previousElementSibling;
      if (previousInput) {
        previousInput.focus();
      }
    }
  }
</script>
</html>
