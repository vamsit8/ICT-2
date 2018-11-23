
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
 
    <title>lor</title>
</head>
<body 
<?php include("include/head.inc") ?>

<?php include("include/nav.inc") ?>
    <div class="container" style="border-radius: 5px;  border: black; padding:20px;margin-left: 100px; ">
        <div class="row text-center padding" style="padding: 20px;">
           <div class="col-12">
    	<form action="orderprocess.php" method="post">
        <div class="col-xs-8 col-sm-6 col-md-4 col-lg-8" >
        	<h1>Confirm Order</h1>
            <h2>Please enter your details</h2>
            <p><i>Fields marked with an asterisk (*) must be entered.</i></p>
            <div class="row">
            	<div class="col">
                	<label for="name">* Name:</label>
                    <input type="text" id="name" name="name" size="30" maxlength="50" required />
                </div>
            </div>
            <div class="row">
            	<div class="col">
                	<label for="email">* Email:</label>
                	<input type="email" id="email" name="email" size="30" maxlength="50"  required />
                </div>
            </div>
           
            <div class="row">
            	<div class="col">
                	<label for="ph">* Phone</label>
                    <input type="phone" id="ph" name="ph" size="10" maxlength="10" style="margin-right: 155px;" placeholder="Contact_number"
                               onChange="phoneNumber(document)" required />
                    <span class="error_msg" id="ph_msg"></span>
                </div>
            </div>
              <?php include("pickup.php") ?>
              <br>
          </br>


            <div class="row">
            	<div class="col">
                	<label>&nbsp;</label>
                    <input type="submit" id="submit" value="Confirm" onClick="return validateInfo(document)" />
        
                </div>
            </div>
        </div>
        </div>
        </form>

    </div>
</div>
<?php include("include/footer.inc")?>
</body>

 
</html>

</html>
<style>
    .row .col{
        padding: 5px;
        text-align:center;
        display: block;}
</style>
