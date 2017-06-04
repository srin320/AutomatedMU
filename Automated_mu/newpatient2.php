<?php

		session_start();
			mysql_connect('localhost','root','');
			mysql_select_db('mu_demo');

			if(isset($_POST['submit']))
			{
				$name=$_POST['name'];
				$username=$_POST['username'];
				$password=$_POST['password'];
				$mobile=$_POST['mobile'];
				$address=$_POST['address'];

				$_SESSION['name']=$name;
				$_SESSION['username']=$username;
				$_SESSION['password']=$password;
				$_SESSION['mobile']=$mobile;
				$_SESSION['address']=$address;
				
				
				$userid=rand(1000,10000);

                $_SESSION['otp']=$userid;

				$query1=mysql_query("select id from patient where id='$userid'");
				if(mysql_num_rows($query1)>0)
				{
					$userid=rand(1000,10000);
				}

				else
				{
					$query=mysql_query("select * from patient where username='$username'");
					if(mysql_num_rows($query)>0)
					{
						echo "<script>alert('Username exists! Try another username.')</script>";
					}
					else
					{
						//echo $mobile;

						$sql=(mysql_query("insert into otp(otp,mobile) values('$userid','$mobile')"));


							
							
						
					}


				}


			}
			mysql_close();





	//$_SESSION['mobile']=$mobile;
	//$_SESSION['otp']=$otp;

	$mobile1 = $_SESSION['mobile'];
	$otp1 = $_SESSION['otp'];
	//echo $mobile1;
	//echo $otp1;
	// Authorisation details.
	$username = "srin.320@gmail.com";
	$hash = "db916002c72efa4a25e182fe7ee206a9b3bd31562ebd8f9e8d12dc620cc59bb6";

	// Config variables. Consult http://api.textlocal.in/docs for more info.
	$test = "0";

	// Data for text message. This is the text message data.
	$sender = "TXTLCL"; // This is who the message appears to be from.
	$numbers = $mobile1; // A single number or a comma-seperated list of numbers
	$message = $otp1;
	// 612 chars or less
	// A single number or a comma-seperated list of numbers
	$message = urlencode($message);
	$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
	$ch = curl_init('http://api.textlocal.in/send/?');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch); // This is the result from the API
	curl_close($ch);

	header('location:newpatient1.php');

?>

