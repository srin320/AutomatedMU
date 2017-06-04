<?php
session_start();
?>
<html>
	<?php

	if(!$_SESSION['username']){

	header('location: doctorlogin.php');

}
?>

<html>
	<head>
		<title>My appointments</title>
	</head>
	<style type="text/css">
body{
	background-image: url("m1.jpg");
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
		<a href="doctorlogout.php" style="float:right;"><input type="button" name="submit3" value="Log out" size="8" style="font-size:12pt;color:white;background-color:midnightblue;border:2px solid #191970;padding:3px" /></a>
		<a href="welcomedoctor.php" style="float:left;"><input type="button" name="submit35" value="Back" size="8" style="font-size:12pt;color:white;background-color:midnightblue;border:2px solid #191970;padding:3px" /></a><br>
		<center>
			<h2><?php echo $_SESSION['name']; ?> appointments : </h2>
			<p>
				<table width="900" border="10">
					<tr>
						<th>Patient's name</th>
						<th>Date</th>
						<th>View details</th>
						<th>Complete</th>
						<th>Refer(if need)</th>
					</tr>
					<?php
						mysql_connect('localhost','root','');
						mysql_select_db('mu_demo');

						$username = $_SESSION['username'];
					    $query1 = "select name from doctor where username='$username'";

					    $run = mysql_query($query1);

					    while($row=mysql_fetch_array($run))
					    {
					        $name = $row['name'];
					    }
					    $query = "select * from appointment where doctor_name='$name' order by appointment_date ASC";

					    $run = mysql_query($query);

						while($row=mysql_fetch_array($run))
						{
							$patient_id = $row['patient_id'];
							$patient_name = $row['patient_name'];
							$appointment_date = $row['appointment_date'];
							$doc_name = $row['doctor_name'];
					?>

					<tr>
						<td><?php echo $patient_name; ?></td>
						<td><?php echo $appointment_date; ?></td>
						<td><?php echo "<a href='viewpatient.php?p_id=$patient_id'>View</a>"; ?></td>
						<td><a href="complete.php?date=<?php echo $appointment_date; ?>&doc=<?php echo $doc_name; ?>&del=<?php echo $patient_id; ?>">Click if completed</a></td>
						<td><?php echo "<a href='refer.php?p_id=$patient_id'>Refer</a>"; ?></td>
					</tr>

					<?php } ?>
				</table>
			</p>
		</center>
	</body>
</html>