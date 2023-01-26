<?php
session_start();
$uname = $_SESSION["name"];
?>

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

$sql =  "SELECT * FROM history WHERE REST_ID = '$uname' order by DATE DESC";
$result1 = $mysqli->query($sql); 
#$mysqli->close(); 

?>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">   
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<style> 
		table { 
			margin: 0 auto; 
			font-size: large; 
			border: 1px solid black; 
		} 

		h1 { 
			text-align: center; 
			color:black;
			font-size: xx-large; 
			font-family: 'Gill Sans', 'Gill Sans MT', 
			' Calibri', 'Trebuchet MS', 'sans-serif'; 
            margin-top: 50px;
            margin-bottom: 70px;
            font-weight: bold;
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
</style>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
     <a class="navbar-brand" href="#"><?php echo $uname ?></a>
    </div>
    <ul class="nav navbar-nav">
      <li ><a href="rest_home.php">Home</a></li>
        <li class="active"><a href="#">History</a></li>
      <li><a href="logo.php">Log Out</a></li>
      
    </ul>
  </div>
</nav>
<h1>History</h1>
      <table>
          <tr>
                <th>DATE</th>
                <th>FOOD ITEM</th>
                <th>QUANTITY</th>
          </tr>
        <?php // LOOP TILL END OF DATA 
         
				while($rows=$result1->fetch_assoc()) 
				{ 
			?> 
           <tr> 
               <td><?php echo $rows['DATE'];?></td>
                <td><?php echo $rows['ITEM_ID'];?></td>
                <td><?php echo $rows['QUANTITY'];?></td>
             </tr>
              
                
			<?php 
				} 
			?> 

      </table>