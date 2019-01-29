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
	<link rel="stylesheet" href="CSS/editproducts.css">
</head>
<body>
	<?php include("include/nav.inc") ?>

	<?php
	
	 $conn  = db_connect();
	 $sql = "SELECT * FROM products";
	 $result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row?>
	<div class="container" style="text-align: center;">
		<div id="border">
		<div class = "row">
			<a href="addproduct.php" class="btn btn-info" role="button" aria-pressed="true">Add a New Product</a>
		</div>
		<div class = "row">
		<?php
    while($row = $result->fetch_assoc()) {
		?>
		
		  <div class="card">
				<div class="col" style="padding: 20px;">

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

  <?php include("include/footer.inc") ?>
</body>
</html>
<style>
	img {text-align: center;}
</style> 