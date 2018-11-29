<?php
session_start();
include_once('include/config.php');
if(isset($_POST['uname'], $_POST['psw'])) {
    //make the database connection
  
    $conn  = db_connect();
    $Username = $conn -> real_escape_string($_POST['uname']);
    $password = $conn -> real_escape_string($_POST['psw']);
    
  $sql= "SELECT * FROM researcher WHERE username = '$Username' AND password = '$password' ";
  $result = $conn->query($sql);
  if ($result->num_rows > 0){
	echo "success";
	$_SESSION["login_v"] = $_POST['uname'];
	header ("location: index.php");
  }
  else 
  {
	  echo "unabletologin";
  }
}
?>