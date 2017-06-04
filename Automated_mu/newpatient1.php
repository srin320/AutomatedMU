<?php

	session_start();

	//$mobile2 = $_SESSION['mobile'];

	$name=$_SESSION['name'];
	$username=$_SESSION['username'];
	$password=$_SESSION['password'];
	$mobile=$_SESSION['mobile'];
	$address=$_SESSION['address'];
	$userid=$_SESSION['otp'];
	echo $userid;
	$_SESSION['otp']=$userid;
?>

<html>
<head>
	<title>Step2</title>
</head>
<body>

<form method="POST" action="newpatient3.php">
	Enter the OTP : <input type="text" name="otptext">
	<br /><br />
	<input type="submit" name="submit1" value="Verify"/>

</form>

	

</body>

</html>





