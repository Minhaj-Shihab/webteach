<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/logincss.css">
  <title>Admin Login</title>
</head>
<body>

<div class="container">
  <div class="heading">Sign In</div>
  <form method="POST" action="../controller/loginController.php" class="form">
    <input required class="input" type="email" name="email" id="email" placeholder="E-mail">
    <input required class="input" type="password" name="password" id="password" placeholder="Password">
    <span class="forgot-password"><a href="#">Forgot Password ?</a></span>
    <input class="login-button" type="submit" name="login" value="Sign In">
  </form>
</div>

</body>
</html>
