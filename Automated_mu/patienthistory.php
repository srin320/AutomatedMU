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
		<title>My problem</title>
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
				<a href="welcomepatient.php" style="float:left;"><input type="button" name="submit35" value="Back" size="8" style="font-size:12pt;color:white;background-color:midnightblue;border:2px solid #191970;padding:3px" /></a><br>

		<center>
			<h2><font color="red">Welcome to NIT DGP Online Appointment Portal <?php echo $_SESSION['name']; ?></font></h2>
	<body>
		<br><br><br><br><br><br><br><br>
		<center>
			<form method="POST">
				<?php
					mysql_connect('localhost','root','');
					mysql_select_db('mu_demo');

					$username = $_SESSION['username'];
					$sql2 = "select id from patient where username='$username'";
					$run2 = mysql_query($sql2);
					while($row2=mysql_fetch_array($run2))
					{
						$p_id = $row2['id'];
					}
					$sql3 = "select history from patient_history where id='$p_id'";
					$run3 = mysql_query($sql3);
					if(mysql_affected_rows()>0)
					{
					while($row3=mysql_fetch_array($run3))
					{
						$problem = $row3['history'];
				?>
				<label>My Problem : <textArea name="problem" placeholder="<?php echo $problem; ?>"></textArea></label>
				<?php } 
				}
				else
				{
					echo "<textArea name='problem'></textArea>";
				}
				?>
				<p>
					<input type="submit" name="upload" value="Upload" />
				</p>
				<p>Or,</p>
				<p>
					<input type="submit" name="update" value="Update" />
				</p>
			</form>
		</center>

		<?php 
			mysql_connect('localhost','root','');
			mysql_select_db('mu_demo');

			$username = $_SESSION['username'];
			$sql1 = "select id,name from patient where username='$username'";
			$run1 = mysql_query($sql1);
			while($row1=mysql_fetch_array($run1))
			{
				$p_id=$row1['id'];
				$p_name=$row1['name'];
			}

			if(isset($_POST['upload']))
			{
				$problem = $_POST['problem'];

				
				mysql_query("insert into patient_history(id,name,history) values('$p_id','$p_name','$problem')");
				echo "<script>alert('Uploaded your problem!')
				window.location.href='welcomepatient.php';
				</script>";
			}
			
			mysql_close();
		?>

		<?php 
			mysql_connect('localhost','root','');
			mysql_select_db('mu_demo');

			$username = $_SESSION['username'];
			$sql1 = "select id,name from patient where username='$username'";
			$run1 = mysql_query($sql1);
			while($row1=mysql_fetch_array($run1))
			{
				$p_id=$row1['id'];
				$p_name=$row1['name'];
			}

			if(isset($_POST['update']))
			{
				$problem1 = $_POST['problem'];

				
				mysql_query("update patient_history set history='$problem1' where id='$p_id'");
				echo "<script>alert('Updated!!!')
				window.location.href='welcomepatient.php';

				</script>";
			}
			
			mysql_close();
		?>

		

	</body>
</html>