<html>
<?php 
	session_start();
	
?>
<head></head>
<body>
<?php
unset($_SESSION["admin_login"]); 
	echo "<script>
		alert('You have logged out successfully');
		window.location.href='index.php'</script>";
?>
</body>
</html>