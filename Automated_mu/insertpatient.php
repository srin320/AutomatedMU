<?php
	mysql_connect('localhost','root','');
	mysql_select_db('mu_demo');

	$username = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$name = $_POST['name'];
	$fname = $_POST['fname'];
	$sex = $_POST['sex'];
	$age = $_POST['Age'];
	$occupation = $_POST['options'];
	$address = $_POST['address'];

	$userid=rand(1000,10000);

	$query1=mysql_query("select id from patient where id='$userid'");
	if(mysql_num_rows($query1)>0)
	{
		$userid=rand(1000,10000);
	}
	else
	{
		$query = mysql_query("select * from patient where username='$username'");
		if(mysql_num_rows($query)>0)
		{
    		echo "Duplicate username!!!";
		}
		else
		{	
			$sql = mysql_query("INSERT INTO patient(id,username,password,email,phone,name,fname,sex,age,occupation,address) VALUES('$userid','$username','$password','$email','$phone','$name','$fname','$sex','$age','$occupation','$address')");
			echo "Thank you!". " Your reference number is- ".$userid;
		}
	}  
	mysql_close();
?>