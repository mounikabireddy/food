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
</head>
<body style="background-color:pink;">

<form action="upload.php" method="post" enctype="multipart/form-data">
    <h2>Insert Your Food Item</h2>

    <label>Enter the Name of Food-Item : </label>
    <input type="text" name="item_name" >
    <br><br>
    <label>Select image of Food-Item:</label>
    <input type="file" name="fileToUpload" id="fileToUpload">
    <br><br>
    <label>Enter the price:</label><br>
    <input type='number' name="price">
    <br><br>
    <center> <input type="submit" class ="button" value="Insert" name="Insert"></center>
  
</form>

</body>
</html>
