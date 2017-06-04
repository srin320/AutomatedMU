
<html>
<title>SMS</title>
<head>
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
            <a href="reception.php" style="float:right;"><input type="button" name="submit3" value="Log out" size="8" style="font-size:12pt;color:white;background-color:midnightblue;border:2px solid #191970;padding:3px" /></a><br>
		<center>

        </div>
	<?php 
	session_start();

	if(!$_SESSION['username']){

	header('location: reception.php');

}
?>
<div class="row outterWrapper">
        
            
        </div>
                <a href ="view1.php"><input type="button" name="button" value="View Patient Info" >

        <a href ="view.php"><input type="button" name="button" value="View Appointment" ></a>
<body>
<form action="sms1.php" method="POST" align="center">
<center>
      <table align="top" width="50%" border="3" border color="goldenrod">
			<tr>
				<td align="middle">
	Number:<br/>
	 <input type="text" name="number">
	<br/><br/>
	 Sender:<br/>
	 <input type="text" name="from">
	 <br/><br/>

	 Message:<br/> <br/>
	 <textarea name="message"></textarea><br/>
	 <input type="hidden" name="submitted" value="send">
	 <input type="submit" name="submit" value="send">
</td></tr></table></center>


</form>

<?php

	if(isset($submit))
	{
	// Authorisation details.
	$username = "srin.320@gmail.com";
	$hash = "db916002c72efa4a25e182fe7ee206a9b3bd31562ebd8f9e8d12dc620cc59bb6";

	// Config variables. Consult http://api.textlocal.in/docs for more info.
	$test = "0";

	// Data for text message. This is the text message data.
	$sender = $_POST['from']; // This is who the message appears to be from.
	$numbers = $_POST['number']; // A single number or a comma-seperated list of numbers
	$message = $_POST['message'];
	// 612 chars or less
	// A single number or a comma-seperated list of numbers
	$message = urlencode($message);
	$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
	$ch = curl_init('http://api.textlocal.in/send/?');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch); // This is the result from the API
	curl_close($ch);
	}
?>

</body>


</head>
</html>