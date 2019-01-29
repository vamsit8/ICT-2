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

	<div class="container">
        <div id="border" class="bg-light mt-3 px-2 product_frm">
		<form id="productinfo" action="upload.php" method="post" enctype="multipart/form-data">
            <h2>Select a product's image to upload:</h2>
			<div class="row">
		 <div class="col-md-1">
            <input type="file" name="fileToUpload" id="fileToUpload">
			</div>
			</div>
		 <div class="row">
		 <div class="col-md-1">
		 </div>
            	<div class="col-md-11">
				<input type="submit" value="Upload Image" name="submit">
                </div>
        </div>
        </form>
		</div>
	</div>
  <?php include("include/footer.inc") ?>
</body>
</html>