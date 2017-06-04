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
		<title>Welcome</title>
	
</head>
<style type="text/css">
body{
	background-image: url("m1.jpg");
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
		<a href="patientlogout.php" style="float:right;"><input type="button" name="submit3" value="Log out" size="8" style="font-size:12pt;color:white;background-color:midnightblue;border:2px solid #191970;padding:3px" /></a><br>
		<center>
			<h2><font color="red">Welcome to NIT DGP Online Appointment Portal <?php echo $_SESSION['name']; ?></font></h2>

			<?php
                mysql_connect("localhost","root","");
                mysql_select_db("mu_demo");

                $username = $_SESSION['username'];
                $user_id = $_SESSION['id'];

                $query = "select id from patient where username='$username'";

                $run = mysql_query($query);

               	while($row=mysql_fetch_array($run))
                {
                    $user_id = $row['id'];    
                                        
            ?>
            <table border="3">
            	<tr><td align="center"><img src="h2.jpg" height="200" width="200">
			<p><a href="appointment.php?user='$user_id'"><p><input type="button" name="submit1" value=" Make an Appointment" size="8" style="font-size:12pt;color:white;background-color:midnightblue;border:2px solid #191970;padding:3px" /></a></p>
</td>
			<?php } ?>

			<td align="center"><img src="mu.jpg" height="200" width="200"><p><a href="patientappo.php"><p><input type="button" name="submit2" value=" View My Appointments" size="8" style="font-size:12pt;color:white;background-color:midnightblue;border:2px solid #191970;padding:3px" /></a></p></td>

			<td align="center"><img src="admin.png" height="200" width="200"><p><a href="patienthistory.php"><p><input type="button" name="submit3" value="&nbsp&nbsp&nbsp&nbsp Your Problems &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp" size="8" style="font-size:12pt;color:white;background-color:midnightblue;border:2px solid #191970;padding:3px" /></a></p></td>
</tr></table>
		</center>
	</body>
</html>