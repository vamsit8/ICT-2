<!DOCTYPE html>
<html lang="en">
<head>
        <?php include("include/head.inc") ?>
         <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="css/member.css">
     
    <title>register</title>
</head>
<body>
<?php include("include/nav.inc") ?>
    <div class="container">
    	<form action="pro.php" method="post">
        
        	<h1>Registration form</h1>
           
          
          <style>
* {
    box-sizing: border-box;
}

input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
}

label {
    padding: 12px;
    display: inline-block;
}

input[type=submit] {
    background-color: #00001a;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    float: right;
}

input[type=submit]:hover {
    background-color: #00001a;
}

.container {
    border-radius: 5px;
    
    padding: 20px;
}

.col-25 {
    float: left;
    width: 25%;
    margin-top: 6px;
}

.col-75 {
    float: left;
    width: 75%;
    margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
    .col-25, .col-75, input[type=submit] {
        width: 100%;
        margin-top: 0;
    }
}
</style>
</head>
<body>



<div class="container">
  
     <div class="row">
       <div class="col-25">
        <label for="fname">Profile picture</label>
      </div>
      <div class="col-75">
            <input type="file" name="fileToUpload" id="fileToUpload">
      </div>
      </div>
      <div class="row">
      <div class="col-25">
        <label for="fname">User name</label>
      </div>
      <div class="col-75">
        <input type="text" id="username" name="username" placeholder="username">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="fname">First Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="fname" placeholder="firstname">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Last Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="lname" placeholder="lastname">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="Education">Mobile number</label>
      </div>
       <div class="col-75">
        <input type="tel" id="mobile_number" name="mobile_number" placeholder="enter your contact number" >
      </div>
      
    </div>
    <div class="row">
      <div class="col-25">
        <label for="address">Address</label>
      </div>
      <div class="col-75">
        <textarea id="address" name="address" placeholder="enter the address" style="height:100px"></textarea>
      </div>
    </div>
      <div class="row">
      <div class="col-25">
        <label for="fname">postcode</label>
      </div>
      <div class="col-75">
        <input type="text" id="postcode" name="postcode" placeholder="postcode">
      </div>
    </div>
        <div class="row">
      <div class="col-25">
        <label for="fname">Username</label>
      </div>
      <div class="col-75">
        <input type="text" id="Username" name="Username" placeholder="username">
      </div>
    </div>
        <div class="row">
      <div class="col-25">
        <label for="fname">Password</label>
      </div>
      <div class="col-75">
        <input type="text" id="Password" name="password" placeholder="Password">
      </div>
    </div>

       
       
    <div class="row" >
        <div class="col-4"></div>
        <div class="col-4" style="margin-left: ">
          <br>
        
      <input type="submit" value="Register" style="margin-right: 600px;font-size: 20px">
    </div>
     <div class="col-4"></div>
  </form>
</div>
</div>
</div>

</body>

  
  

</html>
<br>
<br>

<?php include("include/footer.inc") ?>
