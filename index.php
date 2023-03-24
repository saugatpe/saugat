<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <script src="script.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>LOGIN PAGE</title>
</head>
<body>
    <h1>LOGIN FORM</h1>

    <form action="add.php" method="post">
        <input type="text" name="email" placeholder="Mobile number or Email" required><br><br>
        <input type="text" name="password" placeholder="Password" id="myinput" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required><br><br>
        <input type="checkbox" onclick="myfunction()">show password<br><br>
        <input type="submit" value="log in"><br><br>
         <a href="#">Forget password</a>
        </form>
        <div id="message">
  <h3>Password must contain the following:</h3>
  <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
  <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
  <p id="number" class="invalid">A <b>number</b></p>
  <p id="length" class="invalid">Minimum <b>8 characters</b></p>
</div>
    </body>
</html>