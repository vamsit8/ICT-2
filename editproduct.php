<!DOCTYPE html>
<?php
//must appear BEFORE the <html> tag
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
	if(isset($_POST['action'])){
		$productid = $_POST['action'];
		$conn  = db_connect();
		$sql = "SELECT * FROM products where pid= ".$productid;
	 $result = $conn->query($sql);
	 if ($result->num_rows > 0) {
		 while($row = $result->fetch_assoc()) {
				$pname = $row["pname"];
				$pdescription = $row["description"];
				$pprice = $row["product_price"];
				$category = $row["category"];
				
		 }
	 }
	}
	?>

	<div class="container">
        <div id="border" class="bg-light mt-3 px-2 product_frm">
		<form id="productinfo" action="product_update.php" method="post">
            <h2>Edit Product Information</h2>
			<div class="row">
				<div class="col-md-4">
                	<label for="name">* Product ID:</label>
                </div>
				<div class="col-md-4">  
					<input type="text" id="pid" name="pid" size="30" maxlength="50" value= "<?php echo $product_id ?>"  />
				</div>
            </div>
			<div class="row">
				<div class="col-md-4">
                	<label for="name">* Name:</label>
                </div>
				<div class="col-md-4">  
					<input type="text" id="name" name="name" size="30" maxlength="50" value= "<?php echo $pname ?>" required />
				</div>
				<div class="col-md-4">
					<span id="name_msg" class="error_msg"></span>
                </div>
            </div>
            <div class="row">
            	<div class="col-md-4">
                	<label for="description">* Description:</label>
                </div>
				<div class="col-md-4">	
					<textarea id="description" name="description" cols="32" rows="5" form="productinfo" required> <?php echo $description ?> </textarea>
				</div>
				<div class="col-md-4">				
					<span id="description_msg" class="error_msg"></span>
                </div>
            </div>
            <div class="row">
            	<div class="col-md-4">
                	<label for="pprice">* Product Price:</label>
                </div>
				<div class="col-md-4"> 
					<input type="number" id="pprice" name="pprice" step="0.01" value= "<?php echo $product_price ?>" required />
                </div>
				<div class="col-md-4">
					<span id="wrprice_msg" class="error_msg"></span>
                </div>
            </div>
            <div class="row">
				<div class="col-md-4">
                	<label for="numavailable">* Category:</label>
				</div>
				<div class="col-md-4">
                    <input type="text" id="category" name="category" value= "<?php echo $category ?>" required />
				</div>
				<div class="col-md-4">
					<span id="num_msg" class="error_msg"></span>
                </div>
            </div>

		 <div class="row">
		 <div class="col-md-1">
		 </div>
            	<div class="col-md-11">
                    <input type="submit" id="submit" value="Submit" onClick="return true" />
                    <input type="reset" id="reset" value="Clear Form"/>
                </div>
        </div>
        </form>
		</div>
	</div>



  <?php include("include/footer.inc") ?>
</body>
</html> 