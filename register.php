<?php

$con=mysqli_connect('localhost','root','');

   if(!$con)
   {
       echo 'Not connected to server';
   }
if(!mysqli_select_db($con,'csebit'))
{
    echo 'database not selected';
}

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$psw = $_POST['psw'];



    $sql = "INSERT INTO customer(name,phone,email,psw)VALUES('$name','$phone','$email','$psw')";



if(!mysqli_query($con,$sql))
{
    echo 'values not inserted';
}


else
{
    
    echo 'values successfully inserted' ."<br>";
    #echo "New college info Id:" . mysqli_insert_id($con);
    exit(header("refresh:0;url=logo.php"));
} 
?>
    
    