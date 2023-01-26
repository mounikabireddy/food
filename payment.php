<?php
session_start();
$uname = $_SESSION["uname"];
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

$id=$_POST['res_name'];
$sql =  "SELECT * FROM $id";
$result1 = $mysqli->query($sql); 


#$mysqli->close(); 

?> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">   
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    

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
        
        
        .button {
  background-color:green;
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
     .button{
            border-radius: 35px;
            cursor:pointer;
            transition: 0.3s;
        }
	</style> 

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
    
    
    <h1>Payment Details</h1>
<table>  
			<tr> 
				<th>Item-NAME</th>
				<th>Cost</th> 
                <th>Quantity</th> 
                <th>Total cost</th>
			</tr> 
			 <?php $total = 0; ?>
			<?php // LOOP TILL END OF DATA 
				while($rows=$result1->fetch_assoc()) 
				{ 
			?> 
                     <?php $item_id = $rows['ID']; ?>
                     <?php $it = $rows['NAME']; ?>
                  <?php if ($_POST[$item_id] > 0) { 
?>


			<tr> 
				<!--FETCHING DATA FROM EACH 
					ROW OF EVERY COLUMN--> 
                
				<td><?php echo $rows['NAME'];?></td>
               
                <td><?php echo $rows['PRICE']; ?></td>
                <td><?php echo $_POST[$item_id]; ?></td>
                <?php $quant = $_POST[$item_id];  ?>
                 <?php $temp;
                      $temp = $rows['PRICE']*$_POST[$item_id];
                      $total += $temp;  
                ?>
                <td><?php echo $temp; ?> </td>
                <?php $sql = " INSERT INTO history (USER_ID,REST_ID,ITEM_ID,QUANTITY) VALUES('$uname','$id','$it', '$quant') ";
                if(mysqli_query($mysqli, $sql)){
    echo " ";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($mysqli);
}
                ?>
			</tr> 
<?php } ?>
			<?php
				} 
			?> 
    <tr> 
        <td colspan="3"> Your Bill Amount is : )</td>
        <td><?php echo $total; ?></td>
                
			</tr> 
		</table> 
</body>

 

    