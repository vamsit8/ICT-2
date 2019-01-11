<!DOCTYPE html>
<?php
//must appear BEFORE the <html> tag
session_start();
include_once('include/config.php');
?>
<html lang="en">
<head>
	<title>Add/Edit Product</title>
	<?php include("include/head.inc") ?>
	<link rel="stylesheet" href="CSS/productedit.css">
	
</head>
<body>
	<?php include("include/nav.inc") ?>
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