<?php
session_start();
?>
<html>
	<?php

	if(!$_SESSION['username']){

	header('location: patientlogin.php');

}
?>
<html>
	<head>
		<title>My appointments</title>
	</head>
	<body>
		<style type="text/css">
body{
	background-image: url("app.jpg");
	background-size: 1400px 650px;
}
th{
	background-color: #fff; 
}
td{
	background-color: #fff; 
}
</style>
<div class="row outterWrapper">
        <div class="columns large-18" style="background-image: url('head1.png');
            background-color: #215179;">
            <div class="row header-row" style="padding-bottom: 10px;">
                <img id="imgheaderBG" src="12.jpg" height="100" width="100"/>
                
            </div>
            
        </div>
	<body>
		<a href="patientlogout.php" style="float:right;"><input type="button" name="submit3" value="Log out" size="8" style="font-size:12pt;color:white;background-color:midnightblue;border:2px solid #191970;padding:3px" /></a>
		<a href="welcomepatient.php" style="float:left;"><input type="button" name="submit35" value="Back" size="8" style="font-size:12pt;color:white;background-color:midnightblue;border:2px solid #191970;padding:3px" /></a><br>
		<center>
			<h2><font color="red">Welcome to NIT DGP Online Appointment Portal <?php echo $_SESSION['name']; ?></font></h2>

		<table width="500" align="center" border="10">
			<tr>
				<th>Doctor</th>
				<th>Date</th>
				
				<th>Action</th>
			</tr>

			<?php
				mysql_connect('localhost','root','');
				mysql_select_db('mu_demo');

				$username = $_SESSION['username'];
			    $query1 = "select id from patient where username='$username'";

			    $run = mysql_query($query1);

			    while($row=mysql_fetch_array($run))
			    {
			        $myid = $row['id'];
			    }

			    $query = "select * from appointment where patient_id='$myid'";

				$run = mysql_query($query);

				while($row=mysql_fetch_array($run))
				{
					$doctor_name = $row['doctor_name'];
					$appointment_date = $row['appointment_date'];
					
			?>

			<tr>
				<td><?php echo $doctor_name; ?></td>
				<td><?php echo $appointment_date; ?></td>
				
				<td><a href="cancelappointment.php?appodate=<?php echo $appointment_date; ?>&doc=<?php echo $doctor_name; ?>&del=<?php echo $_SESSION['id']; ?>">Cancel</a></td>
			</tr>

			<?php } ?>
		
		</table>
	</body>
</html>