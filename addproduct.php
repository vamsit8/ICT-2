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
		<form id="productinfo" action="addproductprocess.php" method="post">
            <h2>Please Enter/Edit Product Information</h2>
            <p><i>Fields marked with an asterisk (*) must be entered.</i></p>
            <div class="row">
				<div class="col-md-4">
                	<label for="pname">* Name:</label>
                </div>
				<div class="col-md-4">  
					<input type="text" id="pname" name="pname" size="30" maxlength="50" required />
				</div>
				<div class="col-md-4">
					<span id="pname_msg" class="error_msg"></span>
                </div>
            </div>
            <div class="row">
            	<div class="col-md-4">
                	<label for="description">* Description:</label>
                </div>
				<div class="col-md-4">	
					<textarea id="description" name="description" cols="32" rows="5" form="productinfo" required></textarea>
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
					<input type="number" id="pprice" name="pprice" step="0.01" required />
                </div>
				<div class="col-md-4">
					<span id="pprice_msg" class="error_msg"></span>
                </div>
            </div>
            <div class="row">
				<div class="col-md-4">
                	<label for="category">* Category:</label>
				</div>
				<div class="col-md-4">
                    <input type="text" id="category" name="category" required />
				</div>
				<div class="col-md-4">
					<span id="pname_msg" class="error_msg"></span>
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