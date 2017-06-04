<?php
session_start();
?>
<html>
<style type="text/css">
body{
  background-image: url("doc.jpg");
  background-size: 1380px 750px;
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
<html>
	<head>
		<title>Welcome</title>
	</head>
	<body>
		<a href="doctorlogout.php" style="float:right;"><input type="button" name="submit3" value="Log out" size="8" style="font-size:12pt;color:white;background-color:midnightblue;border:2px solid #191970;padding:3px" /></a>

		<center>
			<h3><font color="red" size="6">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Welcome : Dr.   <?php echo $_SESSION['name']; ?></font></h3>

			<?php
                mysql_connect("localhost","root","");
                mysql_select_db("mu_demo");

                $username = $_SESSION['username'];
                $user_id = $_SESSION['id'];

                $query = "select id from doctor where username='$username'";

                $run = mysql_query($query);

               	while($row=mysql_fetch_array($run))
                {
                    $user_id = $row['id'];    
                                        
            ?>

			<p><a href="request.php"><button>Appointment reference from other doctor</button></a></p>

			<?php } ?>

			<p><a href="doctorappopanel.php"><button>View my appointments</button></a></p>

		</center>
	</body>
</html>