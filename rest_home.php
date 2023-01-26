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

$sql =  "SELECT NAME FROM restaurant where email = '$uname'";
$result = $mysqli->query($sql); 
$name ;
while($rows=$result->fetch_assoc()) 
			$name = $rows['NAME'];
$_SESSION["name"] = $name;	

#$mysqli->close(); 

?>

<!DOCTYPE html>
<html>
    <head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">   
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <style>
        body{
            background-color: gainsboro;
        }
         .button {
      background-color: green;
      border:none;
      color: white;
      padding: 8px 10px;
      text-align: center;
      text-decoration: none;
      display: inline-block; 
      font-size: 20px;
      margin-top: 150px ;
      margin-left: 150px;
      cursor: pointer;
      opacity: 0.6;
        transition: 0.3s;
             }
         .button{
                border-radius: 10px;
                cursor:pointer;
                transition: 0.3s;
            }
        .button:hover{opacity: 1}

                .split {
          height: 85%;
          width: 30%;
          position: fixed;
          z-index: 1;
          top: 0;
          overflow-x: hidden;
          padding-top: 20px;
          margin-top: 70px;
          margin-right: 20px;
          margin-left: 20px;
          margin-bottom: 20px;            
                    
        }

        .left {
          left: 0;
          background-color: #111;
        }

        .right {
          right: 0;
          background-color: lightpink;
        }

        .centered {
          position: absolute;
          top: 50%;
          left: 20%;
          transform: translate(-15%, -100%);
          text-align: center;
        }

        td{
            text-align: left;
            padding-bottom: 5px;
        }

    
        h1{
            width: 60%;
            text-transform: uppercase;
            text-align: center;
        }
        iframe{
            margin-top: 100px;
            margin-left: 10px;
        }
        

    </style>
   <body>
      <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
     <a class="navbar-brand" href="#"><?php echo $name ?></a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
        <li><a href="res_history.php">History</a></li>
      <li><a href="logo.php">Log Out</a></li>
      
    </ul>
  </div>
</nav>
       <h1>Welcome <?php echo $name ?></h1>
       <iframe src="res_insert.php" height="300" width="300" title="Iframe Example"></iframe>
       <iframe src="res_delete.php" height="300" width="300" title="Iframe Example"></iframe>
           
<?php    
 $sql =  "SELECT * FROM $name ";
$result = $mysqli->query($sql); 
?>
      
       <div class="split right">
  <div class="centered">
      <h3>Your Menu</h3>
      <br>
      <table >
          <tr>
              <TH>ID </TH>
                <th>&nbsp;Item Name</th>
              <th>Cost</th>
          </tr>
      <?php // LOOP TILL END OF DATA 
      
				while($rows=$result->fetch_assoc()) 
				{ 
			?> 
			<tr> 
				<!--FETCHING DATA FROM EACH 
					ROW OF EVERY COLUMN--> 
                <td class="mo"><?php echo $rows['ID'];?></td>
				<td class="mo"><?php echo $rows['NAME'];?></td>
                 
				<td class="nika">&#8377;<?php echo $rows['PRICE'];?></td> 
               
                
			</tr> 
          
			<?php 
				} 
			?>
          <a href="rest_home.php"><button>Refresh</button></a>
      </table>
  </div>
</div>
     
    </body>
</html>
