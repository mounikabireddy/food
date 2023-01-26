<?php
session_start();
$res_name = $_SESSION["name"];
$item_id = $_POST['item_id'];

?>


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





    $sql = "DELETE FROM $res_name WHERE id = '$item_id' ";
?>

    
<?php
if(!mysqli_query($con,$sql))
{
    echo 'values not deleted';
   
}


else
{
       
    echo 'values successfully deleted' ."<br>";
       exit(header("refresh:0;url=res_delete.php"));
} 
?>
