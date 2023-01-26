<?php
session_start();
?>
<?php
// Set session variables
$_SESSION["uname"] = $_POST['email'];
?>

<?php
$email=$_POST['email'];
$psw=$_POST['psw'];
	

$connection = mysqli_connect('localhost','root','','csebit');
if(!$connection)
{
	die("database connection failed".mysqli_error($connection));
}
$select_db=mysqli_select_db($connection,'csebit');
if(!$select_db)
{
	die("database selection failed".mysqli_error($connection));
}

$query="SELECT  email,psw FROM customer WHERE email='$email' and psw='$psw'";
	$result=mysqli_query($connection,$query) or die(mysqli_error($connection));
	$count=mysqli_num_rows($result);
	if($count==1)
	{
		echo "Login successful";
        exit(header("refresh:0;url=order.php"));
	}
	else
		echo "Invalid login";
?>
 

