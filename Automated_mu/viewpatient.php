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
		<title>patient details</title>
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
		<a href="patientlogout.php" style="float:right;"><input type="button" name="submit3" value="Log out" size="8" style="font-size:12pt;color:white;background-color:midnightblue;border:2px solid #191970;padding:3px" /></a>
				<a href="welcomedoctor.php" style="float:left;"><input type="button" name="submit35" value="Back" size="8" style="font-size:12pt;color:white;background-color:midnightblue;border:2px solid #191970;padding:3px" /></a><br>

		<center>
			<h2><font color="red">Welcome to NIT DGP Online Appointment Portal <?php echo $_SESSION['name']; ?></font></h2>
	<body>
		<center>
			<?php
				mysql_connect('localhost','root','');
				mysql_select_db('mu_demo');

				$p_id = $_GET['p_id'];

				$sql = "select name,history from patient_history where id='$p_id'";
				$run = mysql_query($sql);
				if(mysql_affected_rows()>0)
				{
				while($row=mysql_fetch_array($run))
				{

					$p_name = $row['name'];
					$p_history = $row['history'];
			?>
				<br><br><br><br><br><br><br><br><br><br><br><br><br>
				
				<p><h4>Patient's name : <?php echo $p_name; ?></h4></p>
				<p><h4>Patient's problem/history' : <?php echo $p_history; ?></h4></p>
				<hr>
				<form method="POST">
					<label><textArea name="problem" ></textArea></label>
					<p>
						<input type="submit" name="update" value="Update" />
					</p>
				</form>
		</center>
		<?php } 
		}
		else
		{
			echo "No record inserted!";
		}
		?>
		<?php 
			mysql_connect('localhost','root','');
			mysql_select_db('mu_demo');

			$p_id = $_GET['p_id'];

			if(isset($_POST['update']))
			{
				$problem1 = $_POST['problem'];

				
				mysql_query("update patient_history set history='$problem1' where id='$p_id'");
				echo "<script>alert('Updated!!!')</script>";
			}
			
			mysql_close();
		?>
	</body>
</html>