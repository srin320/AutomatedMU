<?php
mysql_connect('localhost','root','');
mysql_select_db('mu_demo');

$delete_id = $_GET['del'];
$doc_name = $_GET['doc'];
$appo_date = $_GET['appodate'];

$query = "delete from appointment where patient_id='$delete_id' and doctor_name='$doc_name' and appointment_date='$appo_date'";

if(mysql_query($query))
{
	echo "<script>window.open('patientappo.php','_self')</script>";	
}

?>