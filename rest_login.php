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
    padding-top: 100px;
    
    
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
</style>
</head>
<body>

<form action="rest_val.php" method="POST">
  <div class="container">
      <center><h2>Login</h2>
   </center>
    <hr>
      <label for="uname"><b>Email ID</b></label>
    <input type="text" placeholder="Enter Email ID" name="email" id="uname" required>
    <label for="psw"><b>Password</b></label>
    <input type="password"  placeholder="Enter Password" name="psw" id="psw"  required>
   
    <button type="submit" class="registerbtn">Sign in</button>
     
  </div>
  
 
</form>

</body>
</html>