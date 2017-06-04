<?php
session_start();
?>
<html>
	<?php

	if(!$_SESSION['username']){

	header('location: doctorlogin.php');

}
?>


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
	
                            		<a href="welcomedoctor.php" style="float:left;"><input type="button" name="submit35" value="Back" size="8" style="font-size:12pt;color:white;background-color:midnightblue;border:2px solid #191970;padding:3px" /></a><br>

</br></br></br></br></br></br></br></br></br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp


		<center>
			<h2>Set your appointment :</h2>
			<form method="post">
				Choose date : <input type="date" name="txtDate"/>
				<input type="submit" name="submit" value="Set appointment" />
			</form>
			
			<hr>
			<h2>Your appointments : </h2>
			<p>
				<table width="500" border="10">
					<tr>
						<th>Patient's name</th>
						<th>Date</th>
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
					?>

					<tr>
						<td><?php echo $patient_name; ?></td>
						<td><?php echo $appointment_date; ?></td>						
					</tr>

					<?php } 

					mysql_close();
					?>
				</table>
			</p>
		</center>
		<?php
				mysql_connect('localhost','root','');
				mysql_select_db('mu_demo');

				
				

			    if(isset($_POST['submit']))
			    {
			    	//echo $patient_id;
			    	$username = $_SESSION['username'];
				$query = "select name from doctor where username='$username'";

				$run1 = mysql_query($query);

			    while($row1=mysql_fetch_array($run1))
			    {
			        $doc_name=$row1['name'];
			    }
			    $p_id=$_GET['p_id'];
				$query1 = "select id,name from patient where id='$p_id'";

			    $run = mysql_query($query1);

			    while($row=mysql_fetch_array($run))
			    {
			        $patient_id = $row['id'];    
			        $patient_name = $row['name'];
			    }

			    $date = $_POST['txtDate'];
			    $query = mysql_query("SELECT * FROM appointment where appointment_date='$date'");
			    $count = mysql_num_rows($query);

			    $queue = 0;
			    $queue_no = 0;

			    if($count < 10)
			    {
			        $result1 = mysql_query("SELECT queue_no FROM appointment WHERE appointment_date='$date' ORDER BY queue_no DESC LIMIT 1");
			    
			        while ($row = mysql_fetch_assoc($result1)) 
			        {
			            $queue_no = $row['queue_no'];
			        }
			        $condition = True;
			        $queue = $queue_no+1;
			        while($condition == True)
			        {

			            $sql = (mysql_query("INSERT INTO appointment(patient_id,patient_name,doctor_name,appointment_date,queue_no) VALUES('$patient_id','$patient_name','$doc_name','$date','$queue')"));
			            echo "<script>alert('Appointment booked successfully! ')</script>";

			            $condition = False;
			        }
			    }
			}

			?>
	</body>
</html>