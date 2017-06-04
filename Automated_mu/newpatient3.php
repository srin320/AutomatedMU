<?php
session_start();
$userid=$_SESSION['otp'];
$name=$_SESSION['name'];
$username=$_SESSION['username'];
$password=$_SESSION['password'];
$mobile=$_SESSION['mobile'];
$address=$_SESSION['address'];
mysql_connect("localhost","root","");
mysql_select_db("mu_demo");


		$code=$_POST['otptext'];

		if($code==$userid)
		{
			
			$sql=(mysql_query("insert into patient(id,name,username,password,phone,address) values('$userid','$name','$username','$password','$mobile','$address')"));
			echo "<script> alert('You Have Successfully Registered')
				window.location.href='patientlogin.php';
			</script>";
		}
		else
			echo "Unmatched!!!";
	

	mysql_close();

	?>