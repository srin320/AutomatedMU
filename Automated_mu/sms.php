<?php
$username="susnatapaul1995@gmail.com";
$password="Susnata1234";
echo $number=$_POST['numberext'].$_POST['number'];
echo $from=$_POST['from'];
$vars="uname=".$username."&pword=".$password."&message=".$message."&from=".$from."&selectednums=".$number."&info=1&test=0";

if ($_POST['submitted']=="true")
{
echo $message=$_POST['message'];
	    $curl = curl_init('http://www.txtlocal.com/sendsmspost.php');
	    curl_setopt($curl, CURLOPT_POST, true);
	    curl_setopt($curl, CURLOPT_POSTFIELDS, $vars);
	    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
     	$result=curl_exec($curl);
        curl_close($curl);

        die("SMS has been sent.");
}



?>
<html>
<title>SMS</title>
<head>
<body>
<form action="sms.php" method="POST">

	Number:<br/>
	<input type="text" size="2" name="numberext"> - <input type="text" name="number">
	<br/><br/>
	 Sender:<br/>
	 <input type="text" name="from">
	 <br/><br/>

	 Message:<br/> <br/>
	 <textarea name="message"></textarea><br/>
	 <input type="hidden" name="submitted" value="send">
	 <input type="submit" name="submit" value="send">



</form>



</body>


</head>
</html>