<!DOCTYPE html>
<?php

session_start();
include_once('include/config.php');
?>
<html lang="en">
<head>
  <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Golden Lor</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
  <link href="newstyles.css" rel="stylesheet" type="text/css">
     
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
          <a class="nav-link" href="orders.php">Orders</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="adminlogout.php"> logout</a>
        </li>
         <li class="nav-item">
        <a class="nav-link" href="editproducts.php"> Edit Products</a>
        </li>
      </ul>
    </div>
  </div>
</nav>



</head>


<body>
	  


	<?php
	
	 $conn  = db_connect();
	 $sql = "SELECT * FROM products";
	 $result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row?>
	<div class="container" ">
		<div id="border">
		<div class = "col-md-6">
			<a href="addproduct.php" class="btn btn-info" role="button" aria-pressed="true">Add a New Product</a>
		</div>
		
		<?php
    while($row = $result->fetch_assoc()) {
		?>
		
		 
				<div class="row" style="padding: 30px;">

					<?php
						echo "<img class = \"picture\" src=\"".$row["image"]."\">"
					?>
				</div>

			<div class = "row">
				<?php echo "<h3>".$row["pname"]."</h3>" ?>
			</div>
			<div class = "row">
				<?php echo "<h4>Description: ".$row["description"]."</h4>" ?>
			</div>
			<div class = "row">
				<?php echo "<h4>Product Price: $".number_format((float)$row["product_price"], 2, '.', '')."</h4>" ?>
			</div>
			<div class = "row">
				<?php echo "<h4>Product Category: ".$row["category"]."</h4>" ?>
			</div>
			<div class = "row">
				<div class="editbutton">
				<form action="editproduct.php" method="post">
					<?php echo "<button type=\"submit\" class=\"btn btn-primary\" name=\"action\" value=\"".$row["product_id"]."\" /> Edit Product </button>" ?>
				</form>

			</div></div>

		<?php
	}?>
	</div></div></div>
	<?php
} else {
    echo "0 results";
}
$conn->close();
	?>

  
</body>

</html>
<style>
	img {text-align: center;}
</style> 
<?php include("include/footer.inc") ?>