    <div class="image" style="background-color: #14141f;position: center; text-align: center;"> <img src="img/logo-full.png" style="  margin-left: auto;margin-right: auto; background-color: #14141f;"></div> 
    <?php if(isset($_SESSION["admin_login"])):?>
<nav class="navbar navbar-inverse" style="background-color: #14141f;">
  <div class="container-fluid">
    
    <ul class="nav navbar-nav" style="font-size: 20px,">
      <li><a href="index.php"> <span class="glyphicon glyphicon-home"></span> Home </a></li>      
      <li><a href="menu.php"><span class="glyphicon glyphicon-th-list"></span> Menu</a></li>
      <li><a href="contactus.php"><span class="glyphicon glyphicon-send"></span> contact us </a></li>
      <li><a href="aboutus.php"><span class="glyphicon glyphicon-shopping-cart"></span> About us</a></li>

      <ul class="nav navbar-nav navbar-right">

      <li><a href="adminlogin.php"><span class="glyphicon glyphicon-log-in"></span> Admin Login</a></li>
    </div>
    </ul>
      
    </ul> <?php endif; ?>
    <?php if(!isset($_SESSION["admin_login"])):?>
<nav class="navbar navbar-inverse" style="background-color: #14141f;">
  <div class="container-fluid">
    
    <ul class="nav navbar-nav" style="font-size: 20px,">
      <li><a href="index.php"> <span class="glyphicon glyphicon-home"></span> Home </a></li>

      <li><a href="menu.php"><span class="glyphicon glyphicon-th-list"></span> Menu</a></li>
      <li><a href="contactus.php"><span class="glyphicon glyphicon-send"></span> contact us </a></li>
      <li><a href="aboutus.php"><span class="glyphicon glyphicon-shopping-cart"></span> About us</a></li>
      <li><a href="reg.php"><span class="glyphicon glyphicon-home"></span> customer registration </a></li> 
      <ul class="nav navbar-nav navbar-right">

      <li><a href="adminlogin.php"><span class="glyphicon glyphicon-log-in"></span> Admin Login</a></li></div>
    </ul>
      
    </ul> <?php endif; ?>









    
      
   
       
    </ul>
  </div>
</nav>
<style>


</style>