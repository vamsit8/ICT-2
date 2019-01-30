    <div class="image" href="index.php" style="background-color: #14141f;position: center; text-align: center;"> <img src="img/logo-full.png" style="  margin-left: auto;margin-right: auto; background-color: #14141f;"><span style="font-size: 20px;color: white;float: right;padding: 20px;">PH :0462852688</span></div> <!--The image base -->
   

    <?php if(isset($_SESSION["admin_login"])):?>
<nav class="navbar navbar-inverse" style="background-color: #14141f;">
  <div class="container-fluid">
    
    <ul class="nav navbar-nav" style="font-size: 20px;padding: 20px;">
      <li><a href="index.php"> <span class="glyphicon glyphicon-home"></span> Home </a></li>      
      <li><a href="menu.php"><span class="glyphicon glyphicon-cutlery"></span> Menu</a></li>
      <li><a href="contactus.php"><span class="glyphicon glyphicon-send"></span> contact us </a></li>
      <li><a href="aboutus.php"><span class="glyphicon glyphicon-shopping-cart"></span> About us</a></li>

      <ul class="nav navbar-nav navbar-right">

      <li style="margin-left: "><a href="adminlogin.php"><span class="glyphicon glyphicon-log-in"></span> Admin Login</a></li>
    </div>
    </ul>
      
    </ul> <?php endif; ?>
    <?php if(!isset($_SESSION["admin_login"])):?>
<nav class="navbar navbar-inverse" style="background-color: #14141f;">
  <div class="container-fluid">
    
    <ul class="nav navbar-nav" style="font-size: 20px;padding: 4px;">
      <li><a href="index.php"> <span class="glyphicon glyphicon-home"></span> Home </a></li>

      <li><a href="aboutus.php"><span class="glyphicon glyphicon-th-list"></span> About Us</a></li>
      <li><a href="menu.php"><span class="glyphicon glyphicon-cutlery"></span>Menu</a></li>
      <li><a href="contactus.php"><span class="glyphicon glyphicon-send"></span> Contact Us </a></li>
      
      <?php if (!isset($_SESSION['login_v'])): ?>
      <li style="margin-left: 500px;"><a href="clogin.php"><span class="glyphicon glyphicon-user"></span> Log In</a></li> 
      <li style="float: right;"><a href="reg.php"><span class="glyphicon glyphicon-user"></span>Register </a></li>
      <?php else: ?>
      <li style="margin-left: 500px;"><a href="clogout.php"><span class="glyphicon glyphicon-user"></span> Log Out</a></li> 
      <li style="float: right;"><a href="profile.php"><span class="glyphicon glyphicon-user"></span> profile</a></li> 
      <?php endif; ?>
      
    </ul> <?php endif; ?>









    
      
   
       
    </ul>
  </div>
</nav>
<style>


</style>