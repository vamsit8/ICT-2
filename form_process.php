<?php
session_start();
include_once('include/config.php');
$firstname_error = $lastname_error = $email_error = $subject_error = "";
$firstname = $lastname = $email = $subject =  $success ="";

if($_SERVER{"REQUEST_METHOD"} == "POST") {
	if(!empty($_POST['firstname']) AND !empty($_POST['lastname']) AND !empty($_POST["email"]) AND !empty($_POST["message"])){
		$conn  = db_connect();
    $fname = $conn -> real_escape_string($_POST['firstname']);
    $lname = $conn -> real_escape_string($_POST['lastname']);
    $email = $conn -> real_escape_string($_POST['email']);
    $message = $conn -> real_escape_string($_POST['message']);
	
	$fullname = $fname." ".$lname;
	
	$nextqid = 0;
	$row = $conn->query('SELECT MAX(qid) AS \'last\' FROM queries')->fetch_assoc();
	if ($row) {
		$nextqid = $row["last"];
	}
	$nextqid=$nextqid+1;
	
	$sql = "insert into queries (qid, name, email, query) 
			VALUES ('$nextqid', '$fullname', '$email', '$message')";
    if($conn -> query($sql))
    {
        header ("location: Message_sent.php");
	}
	else{
		echo("Error " );
	}
    $conn -> close();
	
	
	
	
	
	
	
	}

	
if (empty($_POST['firstname'])){
	$firstname_error = "first name is required";
	}else {
		$firstname = test_input($_POST["firstname"]);
		// checks if name only contains letters and whitespace
		if(!preg_match("/^[a-zA-Z ]*$/",$firstname)) {
			$firstname_error = "only letters and whitespaces are allowed";
		}
	}
	if (empty($_POST['lasttname'])){
	$firstname_error = "last name is required";
	}else {
		$lasttname = test_input($_POST["lastname"]);
		// checks if name only contains letters and whitespace
		if(!preg_match("/^[a-zA-Z ]*$/",$lastname)) {
			$lastname_error = "only letters and whitespaces are allowed";
		}
	}
	if(empty($_POST["email"])) {
		$email_error = "email is required";
	} else {
		$email = test_input($_POST["email"]);
		//check if email address is well-formed
		if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$email_error = "Invalid email format";

		}
	}
	if(empty($_POST["subject"])){
		$subject_error = "this field should not be empty";
		}else {
			$subject = test_input($_POST["subject"]);
			if(!preg_match("/^[a-zA-Z ]*$/",$subject)) {
			$subject_error = "only letters and whitespaces are allowed";

		}
	}
	if (empty($_POST["message"]))
	{
		$message = "";
	} else {
			$message = test_input($_POST["message"]);
	}
	
	if($firstname_error == '' and $lastname_error == '' and $email_error == '' and $subject_error == ''){
		$message_body = '';
		unset($_POST['submit']);
		header ("location: index.php");
		$success = "message sent, thank you for contacting us!";
		echo $success;
		}
			
	
	}
	function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
		}
