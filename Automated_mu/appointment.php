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
	<title>Appointment</title>
</head>
<body>
    <style type="text/css">
body{
    background-image: url("dd.jpg");
    background-size: 1300px 650px;
}
input[type=text], select {
    width: 20%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=date] {
    width: 20%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
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
    

<marquee></center><center><h2><font color="red">Book your appointment here</font></h2></marquee>
<div align="center">
<form method="POST">
	<p>
		 <label for="doc" class="control-label"><font color="blue" size="4">Doctor&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp :</font></label>
                            
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

	</p> 
	<p><font color="blue" size="4">Choose date : <input type="date" name="txtDate"/></font></p>
	<!--<button id="show">Show</button>
	<p id="p"><button style="display:none;">Hidden button!</button></p>	-->

	
   &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="submit" name="submit" value="Book appointment"  size="8" style="font-size:12pt;color:white;background-color:midnightblue;border:2px solid #191970;padding:3px" />
</form>
</div>

<?php  
    
    mysql_connect('localhost','root','');
    mysql_select_db('mu_demo');


    $username = $_SESSION['username'];
    $query1 = "select id,name from patient where username='$username'";

    $run = mysql_query($query1);

    while($row=mysql_fetch_array($run))
    {
        $patient_id = $row['id'];    
        $patient_name = $row['name'];
    }

    if(isset($_POST['submit'])){
    $doctor_name = $_POST['txtDoctor'];
    $date = $_POST['txtDate'];
    
    

    $query = mysql_query("SELECT * FROM appointment where appointment_date='$date'");
    $count = mysql_num_rows($query);
    $queue = 0;
    $queue_no = 0;
    if($count < 10)
    {
        $result1 = mysql_query("SELECT queue_no FROM appointment WHERE appointment_date='$date' AND doctor_name='$doctor_name' ORDER BY queue_no DESC LIMIT 1");
    
        while ($row = mysql_fetch_assoc($result1)) 
        {
            $queue_no = $row['queue_no'];
        }
        $condition = True;
        $queue = $queue_no+1;
        while($condition == True)
        {

            $sql = (mysql_query("INSERT INTO appointment(patient_id,patient_name,doctor_name,appointment_date,queue_no) VALUES('$patient_id','$patient_name','$doctor_name','$date','$queue')"));
            echo "<script>alert('Appointment booked successfully! and the queue no. is $queue');
                window.location.href='welcomepatient.php';
            </script>";

            $condition = False;
        }
    }
    else
    {
        echo "<script>alert('Not available for this date! Select another date.')</script>";
    }
}    
    mysql_close();
?>


</body>
</html>