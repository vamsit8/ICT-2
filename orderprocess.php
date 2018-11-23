<?php
session_start();
include("include/config.php");
?>
<html>
<head><title>Orderprocess</title></head>
<body>
	<?php
	if(isset($_POST["name"], $_POST["email"], $_POST["ph"], $_POST["pickUpTime"]))  
 	{
 		$conn  = db_connect();
    	$name = $conn -> real_escape_string($_POST["name"]);
    	$email = $conn -> real_escape_string($_POST["email"]);
    	$phone = $conn -> real_escape_string($_POST["ph"]);
    	$time = $conn -> real_escape_string($_POST["pickUpTime"]);
    	$total = $_SESSION["totalcost"];
    	//echo $total. "<br>". $name."<br>".$email."<br>".$phone."<br>".$time."<br>";
//insert into orders table

        $maxid = 0;
    $row = $conn->query('SELECT MAX(order_id) AS `maxid` FROM `orders`')->fetch_assoc();
    if ($row) {
        $maxid = $row["maxid"];
    }
    $maxid=$maxid+1;
    
    //create an insert query
    $sql = "insert into orders (order_id,total_price,customer_name,customer_mail,customer_ph,pickup_time) 
            VALUES ('$maxid','$total','$name', '$email', '$phone', '$time')";
		

         if($conn -> query($sql))
      {

         foreach($_SESSION["order_menu"] as $keys => $values)  
        {  
            //echo $values["pname"]."<br>";
            $quantity = $values["item_quantity"];
            
            $thisprice = number_format($values["item_quantity"] * $values["product_price"], 2);
             
            $prod_id=$values["product_id"];


            $sql = "insert into order_item (Product_id,order_id,quantity,price) 
            VALUES ('$prod_id','$maxid','$quantity','$thisprice')";
            
            $result=mysqli_query($conn,$sql);
           
        }
      }

      else{
        echo "<script>
        alert('This order Could not be placed')
       }
    </script>";}

  } 
               echo "<script>
		alert('Order placed successfully');
		window.location.href='index.php';
	</script>";
  
            die();

           	
?>

<?php   ?>

</body>
</html>