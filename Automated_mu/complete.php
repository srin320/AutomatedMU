<?php
mysql_connect('localhost','root','');
mysql_select_db('mu_demo');

$delete_id = $_GET['del'];
$doctor_name = $_GET['doc'];
$appo_date = $_GET['date'];

$query = "delete from appointment where patient_id='$delete_id' and doctor_name='$doctor_name' and appointment_date='$appo_date'";

if(mysql_query($query))
{
	echo "<script>window.open('doctorappopanel.php','_self')</script>";	
}

?>