<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: gainsboro;
    padding-left: 150px;
    padding-right: 150px;
    
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 10px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
    .transparent{
        margin-top: 0.1px;
        opacity: 0.5;
    }
</style>
</head>
<body>

<form action="register.php" method="POST">
  <div class="container">
      <center><h2>Register</h2>
    <p>Please fill in this form to create an account.</p></center>
    <hr>
      <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter Name" name="name" id="name" required>
      <label for="phone"><b>Phone</b></label>
    <input type="text" placeholder="Enter Phone" name="phone" id="phone" pattern="[6-9]{1}[0-9]{9}" required>
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password"  placeholder="Enter Password" name="psw" id="psw"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" maxlength=20 required>
      <p class="transparent"> Password must contain 8 or more characters that are of at least one number, and one uppercase and lowercase letter.</p>
<!--
    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password"  placeholder="Repeat Password" name="psw-repeat"  id="psw-repeat" required>-->
   <input type="submit" class="registerbtn" value="Register">
      
      <center><p>Already have an account? <a href="login.php">Sign in</a>.</p></center>
  </div>
  
  
</form>

</body>
</html>