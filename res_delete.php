<!DOCTYPE html>
<html>
<head>
<style>
 .button {
      background-color: green;
      border:none;
      color: white;
      padding: 8px 10px;
      text-align: center;
      text-decoration: none;
      display: inline-block; 
      font-size: 20px;
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
</style>
      <script language="text/javascript">
    window.parent.location.reload();
</script>
</head>
<body style="background-color:pink;">

<form action="delete.php" method="post" enctype="multipart/form-data">
    <h2>Delete Your Food Item</h2>

    <label>Enter the ID of Food-Item : </label>
    <input type="number" name="item_id" >
    <br><br>
    <center> <input type="submit" class ="button" value="Delete" name="Insert"></center>
  
</form>

</body>
</html>
