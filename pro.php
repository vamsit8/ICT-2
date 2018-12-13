<?php

session_start();
include_once('include/config.php');
$firstname_error = $lastname_error = $email_error = $subject_error = "";
$firstname = $lastname = $email = $subject =  $success ="";

if($_SERVER{"REQUEST_METHOD"} == "POST") {


	if(!empty($_POST["username"]) AND !empty($_POST["fileToUpload"]) AND !empty($_POST["fname"]) AND !empty($_POST["lname"]) AND !empty($_POST["password"]) AND !empty($_POST["postcode"]) AND !empty($_POST["mobile_number"]) AND !empty($_POST["address"]))
	{

$conn  = db_connect();
	$username = $conn -> real_escape_string($_POST['username']);
	$profile = $conn -> real_escape_string($_POST['fileToUpload']);	
    $fname = $conn -> real_escape_string($_POST['fname']);
    $lname = $conn -> real_escape_string($_POST['lname']);
    $password = $conn -> real_escape_string($_POST['password']);
    $postcode = $conn -> real_escape_string($_POST['postcode']);
    $mobile = $conn -> real_escape_string($_POST['mobile_number']);
    $address = $conn -> real_escape_string($_POST['address']);
	
	$fullname = $fname." ".$lname;
	
	
	$sql = "insert into users (username,	password,	profile_picture,	fname,	lname,	address,	postcode	,phone) 
			VALUES ('$username', '$password', '$profile', '$fname','$lname','$address','$postcode','$mobile')";


    if($conn -> query($sql))
    {
        header ("location: Message_sent.php");
	}
	else{
		echo("Error " . $conn->error);
	}
    $conn -> close();
	}}

?>