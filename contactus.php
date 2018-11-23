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
</style>
</head>
<body>
<?php include("include/nav.inc") ?>
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