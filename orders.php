<?php
session_start();
include("include/config.php");
?>
<html>
<head>
  <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Golden Lor</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
  <link href="newstyles.css" rel="stylesheet" type="text/css">
	
</head>


<body>
    <nav class="navbar navbar-expand-md navbar-light bg-light bg-light sticky-top">
      <!--- md for breakpoint for pixel to expanded full site navigation , nav light color and background light sticky to fix navigation-->
  <div class="conainer-fluid">
    <!-- container fluid for 100% of screen-->
    <a class="navbar-brand" href=""><img src="img/logo-full.png" class="img-fluid"></a> 
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
      <!--  toggle switch for navigation , collapse for navigation to collapse -->
      <span class="navbar-toggler-icon"></span>
    <!-- class for navbar-->
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
      <!-- ml-auto to push navigation when its full width to right , usually in middle -->
        <li class="nav-item acive">
          <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="menu.php">Menu</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="aboutus.php">About us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contactus.php">Contact us</a>
        </li>
         <li class="nav-item">
        <a class="nav-link" href="order_item.php"> order items</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="adminlogout.php"> logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>  

	 <div class="container-fluid padding">
<div class="row padding">



                <?php 
                  $conn  = db_connect(); 
                  $query = "SELECT * FROM orders ORDER BY order_id DESC" ;  
                  $result = mysqli_query($conn, $query);  
                  if(mysqli_num_rows($result) > 0)  
                {    
                 
                     while($row = mysqli_fetch_array($result))  
                     { ?>


                       <div class="col-md-3">
                                     <div class="card-body">
                                      <div class="card">

                                 <h4 class="card-title">Order details</h4>
                                <label for="name">OrderID </label> 
                                <h4 class="text-info"><?php echo $row["order_id"]; ?></h4> 
                                <label for="name">total price</label>
                               <h4 class="text-info"><?php echo $row["total_price"]; ?></h4>
                               <label for="name">Customer name</label>  
                               <h4 class="text-info"><?php echo $row["customer_name"]; ?></h4>
                               <label for="name">Email</label>
                                <h4 class="text-info"><?php echo $row["customer_mail"]; ?></h4>
                                <label for="name">Phone number</label>
                               <h4 class="text-info"><?php echo $row["customer_ph"]; ?></h4>
                               <label for="name">Pickup time</label>
                               <h4 class="text-info"><?php echo $row["pickup_time"]; ?></h4>
                               

               </div>
           </div>
       </div>
               <?php
                     }
                }  
                ?>

               
           </div>
       </div>
</body>
</html>