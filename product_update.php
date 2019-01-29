<?php
//must appear BEFORE the <html> tag
session_start();
include_once('include/config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Golden Lor</title>
</head>
<body>

<?php
if(isset($_POST['pname'], $_POST['description'], $_POST['product_price'], $_POST['category'] )) {
    //make the database connection
    $conn  = db_connect();
    $pname = $conn -> real_escape_string($_POST['pname']);
    $pprice = (float) $conn -> real_escape_string($_POST['product_price']);
    $description = $conn -> real_escape_string($_POST['description']);
    $category = $conn -> real_escape_string($_POST['category']);
	$pid = (int) $conn -> real_escape_string($_POST['product_id']);
	//create an insert query
    $sql = "UPDATE products set pname= '$pname', product_price= '$pprice', description='$description' ,  category = '$category' WHERE product_id =  $pid"; 
	echo $pid;
    //execute the query
	 echo "<br><br>";
	 echo "<div class=\"row\">";
        echo "<div class=\"col-s-12 col-12\">";
        echo "<p>$pname $description  </p>";
        echo "</div>";
        echo "</div>";
    if($conn -> query($sql))
    {
        echo "<div class=\"row\">";
        echo "<div class=\"col-s-12 col-12\">";
        echo "<p><b>successful</b>  </p>";
        echo "</div>";
        echo "</div>";
		$_SESSION["product_id"] = $pid;
		header ("location: updateimage.php");
    }
	else {
		echo $conn->error;
	}
    $conn -> close();
}
else {
    die("unsuccessful");
}
?>
</body>
</html>