<?php
//must appear BEFORE the <html> tag
session_start();
include_once('include/config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>GOLDEN LOR</title>
</head>
<body>

<?php
if(isset($_POST['pname'], $_POST['description'], $_POST['pprice'], $_POST['category'] )) {
    //make the database connection
    $conn  = db_connect();
    $pname = $conn -> real_escape_string($_POST['pname']);
    $pprice = (int) $conn -> real_escape_string($_POST['pprice']);
    $description = $conn -> real_escape_string($_POST['description']);
    $category = $conn -> real_escape_string($_POST['category']);
	//create an insert query
    $sql = "insert into products (pname, product_price, description, category) 
			VALUES ('$pname',  '$pprice', '$description', '$category')";
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
		$last_id = $conn->insert_id;
		echo $last_id;
		$_SESSION["product_id"] = $last_id;
		header ("location: uploadpage.php");
    }
	else{
		echo("Error description: " );
	}
    $conn -> close();
}
else {
    die("unsuccessful");
}
?>
</body>
</html>