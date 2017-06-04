<?php
session_start();
?>
<html>
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
	<?php

	if(!$_SESSION['username']){

	header('location: doctorlogin.php');

}
?>
                            		<a href="welcomedoctor.php" style="float:left;"><input type="button" name="submit35" value="Back" size="8" style="font-size:12pt;color:white;background-color:midnightblue;border:2px solid #191970;padding:3px" /></a><br>

</br></br></br></br></br></br></br></br></br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

<form method="POST" valign="center">
<?php

	mysql_connect('localhost','root','');
	mysql_select_db('mu_demo');

	$sql1 = "select name,field from doctor";
	$result = mysql_query($sql1);

	echo "<select name='txtDoctor'>";
	echo "<option>Select your doctor</option>";
	while($row=mysql_fetch_array($result))
	{
		echo "<option value='".$row['name']."'>".$row['name']."(".$row['field'].")"."</option>";
	}
	echo "</select>";
?>
<p><input type="submit" value="Refer" name="refer" /></p>
</form>

<?php
			mysql_connect('localhost','root','');
			mysql_select_db('mu_demo');

			$patient_id = $_GET['p_id'];

			$username = $_SESSION['username'];
			$query1 = "select id from doctor where username='$username'";

			$run = mysql_query($query1);

			while($row=mysql_fetch_array($run))
			{
				$srcdocid = $row['id'];
			}
			if(isset($_POST['refer']))
			{
				$name=$_POST['txtDoctor'];

				$sql = "select id from doctor where name='$name'";
				$run = mysql_query($sql);

				while($row=mysql_fetch_array($run))
				{
					$desdocid = $row['id'];
				}

				$sql1 = mysql_query("insert into refer(patient_id,src_doctor_id,dest_doctor_id) values('$patient_id','$srcdocid','$desdocid')");
				echo "<script>alert('Successfully reffered!!')</script>";
			}
			mysql_close();
?>