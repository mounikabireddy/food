<?php 
$user = 'root'; 
$password = ''; 
$database = 'csebit'; 
$servername="localhost";
$mysqli =  mysqli_connect($servername, $user, 
				$password, $database); 

// Checking for connections 
if ($mysqli->connect_error) { 
	die('Connect Error (' . 
	$mysqli->connect_errno . ') '. 
	$mysqli->connect_error); 
} 

// SQL query to select data from database

$sql =  "SELECT * FROM restaurant";
$result = $mysqli->query($sql); 


#$mysqli->close(); 

?>

<html>
<head>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">   
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
    
    <title>Order details</title>
    <style>
    .opt{
        font-size:30px
        height: 50px;
        width: 250px;
        text-align: center;
        font-family:cursive;
        padding-left: 20px;
        
        }
        body{
            background-image: url(images/b1.jpg);
            background-repeat: no-repeat;
            background-size: cover;
        }
        h1{
            font-family: cursive;
            color: white;
            margin-top: 100px;
            margin-bottom: 30px;
        }
        .button {
  background-color:white;
  border:none;
  color: black;
  padding: 15px 30px;
  text-align: center;
  font-family: cursive;
  display: inline-block;
  font-size: 20px;
  margin: 4px 2px;
  cursor: pointer;
  opacity: 0.6;
    transition: 0.3s;
         }
        .button:hover{
          background-color: antiquewhite;
                
        }
     .button{
            border-radius: 10px;
            cursor:pointer;
            transition: 0.3s;
        }
        
</style>
</head>
    <body>
        
        <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Flame On</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
        <li><a href="history.php">History</a></li>
      <li><a href="logo.php">Log Out</a></li>
      
    </ul>
  </div>
</nav>
  

        
        
      <center>

    <h1>Select your favourite Restaurant</h1>
        <form action="ord.php" method="POST">
        

            <select onclick="ord.php" id="s1"  name="restname" class="opt" style="font-size: 12pt" required >
            
                <option hidden disabled selected value> -- select ur restaurant -- </option>       <?php // LOOP TILL END OF DATA 
				while($rows=$result->fetch_assoc()) 
				{ 
			?> 
			          <option class="opt" value="<?php echo $rows['ID'];?>" ><?php echo $rows['NAME'];?></option>
			<?php 
				} 
			?>            
          
           
                             </select><br><br><br>
            <input type="submit" class="button" value="SUBMIT">
        
    </form>
    </center>
        </body>
        
    
</html>
