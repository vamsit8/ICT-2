<!DOCTYPE html>
<?php
//must appear BEFORE the <html> tag
session_start();
include_once('include/config.php');
?>
<html lang="en"><?php
echo "<script>
alert('Product added successfully');
window.location.href='editproducts.php';
</script>";
?>
<body>
	
</body>
</html>