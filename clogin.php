<?php
 session_start();?>
 <?php include("include/config.php");?>
<DOCTYPE html>
<html>
<head>
<link href="css/login.css" rel="stylesheet" type="text/css">
<?php include("include/head.inc") ?>
<?php include("include/nav.inc") ?>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<div class="container1">
  <div style="text-align:center">
<h2>Welcome to Golden Lor login page</h2>
<p>please fill in the log-in details below</p>
</div>
</div>
<form action="cloginprocess.php" method="post">
  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
        
    <button type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
  </div>
</form>
<?php include("include/footer.inc") ?>
  
</body>
</html>
