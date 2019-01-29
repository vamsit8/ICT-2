<!DOCTYPE html>
<html>
<head>
<?php include("include/head.inc") ?>
<?php include("form_process.php") ?>
<link rel="stylesheet" href=>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

* {
    box-sizing: border-box;
}

/* Style inputs */
input[type=text], select, textarea {
    width: 100%;
    color:black;
    padding: 12px;
    border: 1px solid #ccc;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}

input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

/* Style the container/contact section */
.container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 10px;
}

/* Create two columns that float next to eachother */
.column {
    float: left;
    width: 50%;
    margin-top: 6px;
    padding: 20px;
    color:white;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
    .column, input[type=submit] {
        width: 100%;
        margin-top: 0;
    }
    .error {
        color:red;
    }
    .success {
        color:blue;
        text-align:center;

    }
}
.rightpanel {
    clear:both; float:right;text-align:center;font-size:1.0em;
    margin-right: .2em; width:100%; margin-left:1em; margin-bottom:30px;
}
.rightpanel h1 {
     text-align:center; font-size: 2.0em; margin:0px; font-style:normal;
    padding-left:0.3em; padding-right:0.3em; padding-top:0.2em; padding-bottom:0.2em;text-decoration: none;
}   
</style>
</head>
<?php include("include/nav.inc") ?>
<body>

  <div class ="rightpanel">
            <h1> get in touch with us through phone or email</h1>
            <p> call us at (07)56081011</p>
            <p> Email us at :</p>
            <a href ="mailto:vamsi.t8@gmail.com" target="_top"> Goldenlor@gmail.com</a>
        </div> 
        <div class="contact-map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14117.131493065865!2d153.1019154!3d-27.8010625!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4856d19e2fee8018!2sGolden+Lor+Yarrabilba!5e0!3m2!1sen!2sau!4v1518798158547" width="1350" height="450"
    frameborder="0" style="border :allowfullscreen"></iframe>
<div class="container" style="font-family: font-family: Arial, Helvetica, sans-serif;">
  <div style="text-align:center">
    <h2>Welcome to The Goldenlor contact us page </h2>
        <p> please feel free to fill in the list below to submit your queries</p>
  </div>
  </div>
        <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="col-6" style="margin-left: 100px; margin-right: 100px; ">
        <label for="fname">First Name</label>
        <input type="text" id="fname" name="firstname" placeholder="" style="background-color: #dee5e8;font-size: 15px;" required/ >
        <span class="firstname_error"><? echo $firstname_error ?></span>
        <label for="lastname_error">Last Name</label>
        <input type="text" id="lname" name="lastname" placeholder="" style="background-color: #dee5e8;font-size: 15px;" required/>
        <span class="lastname_error"><? echo$lastname_error ?></span>
        <label for="email"> Email</label>
            <input type="text" id="email" name="email" placeholder="" style="background-color: #dee5e8;font-size: 15px;" required/>
            <span class="email_error"><? echo $email_error ?></span>
        <label for="subject">Query</label>
        <textarea id="subject" name="message" placeholder=""  style="height:120px;background-color: #dee5e8;font-size: 15px;" required></textarea>
        <span class="subject_error"><? echo $subject_error ?></span>
        <input type="submit" value="Submit"  >
        <div class = "success"><?= $success; ?></div>
        </form>
    </div>
  </div>
  
</div>
</body>
<?php include("include/footer.inc") ?>
</html>