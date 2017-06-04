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
		<title>Appointments</title>
	</head>
	<style type="text/css">
body{
	background-image: url("m1.jpg");
}
th{
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
	
				<a href="welcomedoctor.php" style="float:left;"><input type="button" name="submit35" value="Back" size="8" style="font-size:12pt;color:white;background-color:midnightblue;border:2px solid #191970;padding:3px" /></a><br>

		<center>
			<h3><font color="red" size="6">Appointment request from other doctor</font></h3>
			
			<table width="500" border="10">
				<tr>
					<th>From</th>
					<th>Patient's name</th>
					<th>Action</th>
				</tr>
				<tr>
					<?php
						mysql_connect('localhost','root','');
						mysql_select_db('mu_demo');

						$username=$_SESSION['username'];
						$sql1="select id from doctor where username='$username'";
						$run1=mysql_query($sql1);
						while($row1=mysql_fetch_array($run1))
						{
							$destdoc_id=$row1['id'];
						}

						$sql2="select * from refer where dest_doctor_id='$destdoc_id'";
						$run2=mysql_query($sql2);
						while($row2=mysql_fetch_array($run2))
						{

							$p_id=$row2['patient_id'];
							$srcdoc_id=$row2['src_doctor_id'];

							$sql3="select name from doctor where id='$srcdoc_id'";
							$run3=mysql_query($sql3);
							while($row3=mysql_fetch_array($run3))
							{
								$srcdoc_name=$row3['name'];
							}

							$sql4="select patient_name from appointment where patient_id='$p_id'";
							$run4=mysql_query($sql4);
							while($row4=mysql_fetch_array($run4))
							{
								$p_name=$row4['patient_name'];
							}
					?>
					<td>Dr. <?php echo $srcdoc_name; ?></td>
					<td><?php echo $p_name; ?></td>
					<td><?php echo "<a href='accept.php?p_id=$p_id'><button>Accept</button></a>" ?></td>
				</tr><?php } ?>
			</table>
		</center>
	</body>
</html>