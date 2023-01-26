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



$id=$_POST['restname'];
$sql =  "SELECT * FROM restaurant WHERE ID = '$id'";
$result1 = $mysqli->query($sql); 


#$mysqli->close(); 

?> 
<!DOCTYPE html> 
<html lang="en"> 

<head> 
	<meta charset="UTF-8">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">   
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
	<title>Order Details</title> 
	<!-- CSS FOR STYLING THE PAGE --> 
	<!--<style> 
		table { 
			margin: 0 auto; 
			font-size: large; 
			border: 1px solid black; 
		} 

		h1 { 
			text-align: center; 
			color: #006600; 
			font-size: xx-large; 
			font-family: 'Gill Sans', 'Gill Sans MT', 
			' Calibri', 'Trebuchet MS', 'sans-serif'; 
		} 

		td { 
			background-color: #E4F5D4; 
			border: 1px solid black; 
		} 

		th, 
		td { 
			font-weight: bold; 
			border: 1px solid black; 
			padding: 10px; 
			text-align: center; 
		} 

		td { 
			font-weight: lighter; 
		} 
        -->
    <style>    
        .button {
  background-color:black;
  border:none;
  color: white;
  padding: 15px 30px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 20px;
  margin: 4px 2px;
  cursor: pointer;
  opacity: 0.6;
    transition: 0.3s;
         }
        .button:hover{
            background-color: palegreen;
            color: darkblue;
        }
     .button{
            border-radius: 10px;
            cursor:pointer;
            transition: 0.3s;
        }
        body{
            background-color: gold;
        }
        h1 { 
			text-align: center; 
			color: black;
			font-size: xx-large; 
			font-family: cursive; 
		} 
        th,td { 
			font-weight: bold;
			padding: 10px; 
			text-align: center;
            font-family: cursive;
		} 
        
       
	</style> 
    
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    
    
</head> 

<body> 
    
       <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Flame On</a>
    </div>
    <ul class="nav navbar-nav">
      <li ><a href="order.php">Home</a></li>
      <li><a href="history.php">History</a></li>
        <li><a href="logo.php">Log Out</a></li>
    </ul>
  </div>
</nav>
    
    <form action="payment.php" method="POST">
    <?php $res_name; ?>
	<section> 
        <div class="container center">
        
            <?php // LOOP TILL END OF DATA 
            
				while($rows=$result1->fetch_assoc()) 
				{ 
			?> 
			<tr> 
				<!--FETCHING DATA FROM EACH 
					ROW OF EVERY COLUMN--> 
                <center><h1><?php echo $rows['NAME'];?> Food Menu</h1></center>
                <?php $res_name = $rows['NAME']; ?>
				
			</tr> 
			<?php 
				} 
			?> 
            
        </div>
        <input type = "hidden" name ="res_name" value=<?php echo $res_name ?> >
<?php 
        $sql =  "SELECT * FROM $res_name    ";
$result = $mysqli->query($sql); 
mysqli_close($mysqli); 
        ?>
	<!--<input type="text" name="res_name" value='pawan'>	-->
		<!-- TABLE CONSTRUCTION--> 
        
        <center>
        
            
		<table> 
			<tr> 
				<th>Item-ID</th> 
				<th>Item-Name</th> 
				<th>Cost</th> 
                <th>Quantity</th> 
			</tr> 
			<!-- PHP CODE TO FETCH DATA FROM ROWS--> 
			<?php // LOOP TILL END OF DATA 
				while($rows=$result->fetch_assoc()) 
				{ 
			?> 
			<tr> 
				<!--FETCHING DATA FROM EACH 
					ROW OF EVERY COLUMN--> 
				<td><?php echo $rows['NAME'];?></td> 
                <td><img src=" images/<?php echo $rows['IMAGE']; ?>" width="100" height="100"></td>
				<td><?php echo $rows['PRICE'];?></td> 
                <td>  <input type="text" value="0" name = <?php echo $rows['ID']; ?>  > </td>
			</tr> 
			<?php 
				} 
			?> 
		</table> 
           
            </center>
            
	</section> 
        <center> <input type="submit" class="button" value="SUBMIT">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="order.php"><input type="button" class="button" value="BACK"></a></center>
        
    </form> 
</body> 

</html> 
 