<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Hi</p> <br> <?php echo $_SESSION["email"];?>
     <a href="../controller/logoutController.php">Logout</a>

     
    
</body>
</html>